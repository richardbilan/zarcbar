<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome(Request $request)
    {
        $userId = $request->query('user_id', '');  // Get userId from URL
        $userName = $request->query('user_name', '');  // Get userName from URL
        return view('welcome', compact('userId', 'userName'));
    }
}
