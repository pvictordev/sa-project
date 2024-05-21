<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Freelancer;
use Illuminate\Http\Request;

// get the authenticated freelancer
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class FreelancerController extends Controller
{
    public function index()
    {
        $freelancers = Freelancer::all();
        return view('freelancer', ['freelancers' => $freelancers]);
    }

    public function show($id)
    {
        $freelancer = Freelancer::where('freelancer_id', $id)->firstOrFail();

        return view('freelancer.show', $freelancer);
    }

    public function edit($id)
    {
        $freelancer = Freelancer::where('freelancer_id', $id)->firstOrFail();

        return view('freelancer.edit', compact('freelancer'));
    }
    public function update(Request $request, $id)
    {
        $freelancer = Freelancer::where('freelancer_id', $id)->firstOrFail();
        // Update the attributes
        $freelancer->hourly_rate = intval($request->rate);
        $freelancer->availability = intval($request->availability);

        // Save the updated freelancer
        $freelancer->save();

        // Redirect to the dashboard or any other page
        return redirect('/dashboard');
    }
}