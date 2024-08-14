<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoggedinController extends Controller
{
    public function index()
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please log in first.');
        }

        // Get the authenticated user
        $user = Auth::user();

        // Check if user is null
        if (!$user) {
            return redirect()->route('login')->with('error', 'User is not authenticated.');
        }

        session(['user =>$user']);

        // Pass the user data to the view
        return view('pages.loggedin' , ['user' => $user]);
    }
}


