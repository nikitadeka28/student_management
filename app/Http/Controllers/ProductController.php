<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{
    public function index()
    {
        return view('pages.loggedin');
    }

    public function logout(Request $req)
    {
        // Auth::logout();
        $req->session()->forget('user');
        $req->session()->flush();
        return view('pages.home');
    }
}
