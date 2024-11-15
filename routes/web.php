<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

// Redirect to login page if accessing the root
Route::get('/', function () {
    return redirect()->route('login');
})->name('home');

// Login routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request $request) {
    $userId = $request->input('user_id');
    $userName = $request->input('user_name');
    
    // Simulate login for demonstration (replace with actual login logic)
    Auth::loginUsingId($userId);

    // Debugging output to verify role
    \Log::info('User ID: ' . Auth::id());  // Logs the user ID
    \Log::info('User Role: ' . Auth::user()->role);  // Logs the user's role

    // Redirect based on role
    if (Auth::user()->role === 'admin') {
        return redirect()->route('dashboard.show', ['userId' => Auth::id()]);
    }

    return redirect()->route('welcome');
})->name('login.submit');

// Guest access route
Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');

// Financial Tracker route (accessible without authentication)
Route::get('/FinancialTracker', function () {
    return view('FinancialTracker'); // Ensure FinancialTracker.blade.php exists
})->name('financial.tracker');

// Access-denied route for unauthorized access
Route::get('/access-denied', function () {
    return view('access-denied'); // Ensure access-denied.blade.php exists
})->name('access-denied');

// Dashboard route restricted to admins only
Route::get('/dashboard/{userId}', function ($userId) {
    dd('Dashboard route hit', $userId); // Temporarily dump the userId for debugging

    if (Auth::check() && Auth::user()->role === 'admin') {
        return app(DashboardController::class)->show($userId);
    } else {
        return redirect()->route('access-denied');
    }
})->name('dashboard.show');

// Catch-all route for unauthorized access to any undefined paths within the dashboard
Route::get('/dashboard/{any}', function () {
    return redirect()->route('access-denied');
})->where('any', '.*');
