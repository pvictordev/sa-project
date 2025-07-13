<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');

            Log::info('Attempting to upload file:', [
                'original_name' => $file->getClientOriginalName(),
                'size' => $file->getSize(),
                'mime_type' => $file->getMimeType()
            ]);

            if (!$file->isValid()) {
                Log::error('Invalid file upload:', ['error' => $file->getErrorMessage()]);
                return back()->withErrors(['picture' => 'File upload error: ' . $file->getErrorMessage()]);
            }

            try {
                // Delete old picture if exists
                if ($request->user()->picture) {
                    Log::info('Attempting to delete old picture:', ['path' => $request->user()->picture]);
                    Storage::disk('s3')->delete($request->user()->picture);
                }

                // Generate unique filename
                $filename = 'user_' . $request->user()->id . '_' . time() . '.' . $file->getClientOriginalExtension();
                $path = 'public/images/' . $filename;
                Storage::disk('s3')->put($path, file_get_contents($file), ['visibility' => 'public']);
                Log::info('File uploaded successfully:', [
                    'path' => $path
                ]);

                $validatedData['picture'] = $path;
            } catch (\Exception $e) {
                Log::error('S3 Upload Error:', [
                    'message' => $e->getMessage(),
                    'trace' => $e->getTraceAsString()
                ]);
                return back()->withErrors(['picture' => 'Failed to upload image: ' . $e->getMessage()]);
            }
        }

        $request->user()->fill($validatedData);

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('dashboard')
            ->with('status', 'profile-updated')
            ->with('success', 'Profile successfully updated.');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/')->with('success', 'Profile successfully deleted.');
    }
}
