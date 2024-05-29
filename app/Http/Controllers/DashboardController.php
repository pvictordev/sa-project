<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Freelancer;
use App\Models\Project;
use App\Models\FreelancerSkill;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userId = Auth::id();
        $userData = [
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'bio' => $user->bio
        ];

        $freelancer = Freelancer::where('freelancer_id', $userId)->first();
        $freelancerData = [
            'freelancer_id' => $userId,
            'hourly_rate' => $freelancer->hourly_rate,
            'availability' => $freelancer->availability
        ];

        $projectsData = Project::where('client_id', $userId)->with('category')->get();

        $freelancerSkills = Freelancer::with('skill')->find($userId);

        $reviewsLeft = Review::where('client_id', $userId)->get();
        $reviewsReceived = Review::where('freelancer_id', $userId)->get();

        return view('dashboard', [
            'userData' => $userData,
            'freelancerData' => $freelancerData,
            'projectsData' => $projectsData,
            'freelancerSkills' => $freelancerSkills,
            'reviewsReceived' => $reviewsReceived,
            'reviewsLeft' => $reviewsLeft,
        ]);
    }
    public function freelancer()
    {
        $user = Auth::user();
        $userId = Auth::id();
        $userData = [
            'name' => $user->name,
            'email' => $user->email,
        ];

        $freelancer = Freelancer::where('freelancer_id', $userId)->first();
        $freelancerData = [
            'freelancer_id' => $userId,
            'niche' => $freelancer->niche,
            'bio' => $freelancer->bio,
            'hourly_rate' => $freelancer->hourly_rate,
            'availability' => $freelancer->availability,

        ];

        $freelancerSkills = Freelancer::with('skill')->find($userId);

        $reviewsReceived = Review::where('freelancer_id', $userId)->get();
        return view('freelancer', [
            'userData' => $userData,
            'freelancerData' => $freelancerData,
            'freelancerSkills' => $freelancerSkills,
            'reviewsReceived' => $reviewsReceived,
        ]);
    }
    public function client()
    {
        $user = Auth::user();
        $userId = Auth::id();
        $userData = [
            'name' => $user->name,
            'email' => $user->email,
        ];

        $projectsData = Project::where('client_id', $userId)->with('category')->get();

        $reviewsLeft = Review::where('client_id', $userId)->get();
        return view('client', [
            'userData' => $userData,
            'projectsData' => $projectsData,
            'reviewsLeft' => $reviewsLeft,
        ]);
    }
}
