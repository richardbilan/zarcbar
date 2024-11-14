<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show the admin login/dashboard page
    public function index()
    {
        return view('admin.index');  // Replace with your actual admin view
    }

    // Handle the logic after the admin PIN is verified
    public function dashboard(Request $request)
    {
        // Add logic for processing the admin dashboard
        return view('admin.dashboard');
    }
}
