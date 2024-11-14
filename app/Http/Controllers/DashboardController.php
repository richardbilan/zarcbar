<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show($userId, Request $request)
    {
        $userName = $request->query('username');
        return view('dashboard', compact('userId', 'userName'));
    }
}
