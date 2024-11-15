<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
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
    
    // Simulate login for demonstration (replace with actual login logic)
    Auth::loginUsingId($userId);

    // Debugging output to verify user ID
    \Log::info('User ID: ' . Auth::id());  // Logs the user ID

    // Redirect to the welcome page after login
    return redirect()->route('welcome');
})->name('login.submit');

// Welcome route for authenticated users (accessible without specific role)
Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');

// Financial Tracker route (accessible without authentication)
Route::get('/FinancialTracker', function () {
    return view('FinancialTracker'); // Ensure FinancialTracker.blade.php exists
})->name('financial.tracker');

// Access-denied route for unauthorized access
Route::get('/access-denied', function () {
    return view('access-denied'); // Ensure access-denied.blade.php exists
})->name('access-denied');
