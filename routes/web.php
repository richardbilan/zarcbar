<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\LogRequests;    
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

// Root URL redirects to login page
Route::get('/', function () {
    return redirect()->route('login');
})->name('home');

// Login page route
Route::get('/login', function () {
    return view('auth.login'); // Ensure this view exists
})->name('login');

// Handle login submission with user_id and user_name
Route::post('/login', function (Request $request) {
    $userId = $request->input('user_id');
    $userName = $request->input('user_name');

    // Validate that both user ID and name are provided
    if ($userId && $userName) {
        // Redirect user to the dashboard with user-specific details
        return redirect()->route('dashboard.show', ['userId' => $userId, 'username' => $userName]);
    } else {
        return back()->withErrors(['error' => 'Please provide both User ID and Name.']);
    }
})->name('login.submit');

// Dashboard route with dynamic user ID and middleware
Route::get('/dashboard/{userId}', [DashboardController::class, 'show'])
    ->name('dashboard.show')
    ->middleware('auth');

Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');

// Group routes protected by LogRequests middleware
Route::middleware([LogRequests::class])->group(function () {
    Route::get('/contactus', function () {
        return view('contactus');
    })->name('contact');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/restricted-dashboard', function () {
        return "Access Restricted!";
    });

    Route::get('/access-denied', function () {
        return "Access Denied! Please log in to access this page. di pa po tapos hehe";
    })->name('access.denied');
});

// Admin Routes
Route::prefix('admin')->group(function () {
    // Admin route - temporarily redirect to access denied
    Route::get('/', function () {
        return redirect()->route('access.denied'); // Redirect to access denied for now
    })->name('admin.index');

    // Admin Dashboard - also redirect to access denied for now
    Route::post('/dashboard', function () {
        return redirect()->route('access.denied'); // Redirect to access denied for now
    })->name('admin.dashboard');
});

// Apply CheckAge middleware with a minimum age parameter
Route::middleware([CheckAge::class . ':18'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

