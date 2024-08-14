<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use  Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    function login(Request $request)
    {
        $validator = $request()->validate(
            
            [
                'email'=>['required', 'email'],
                'password'=>['required'],
                'dashboard_type'=>['required']
            ]

        );
       
       
        if(Auth::attempt($validator)){
            return redirect(route('home'));
        }
        
        return redirect(route('home'));
        
        
    }


    public function register(Request $request)
    {
        $validator = request()->validate([
            
            'email'=>['required', 'email'],
            'password'=>['required'],
            'dashboard_type'=>['required']


        ]);
        $user = User::create($validator);
        Auth::login($user);

        
        return redirect(route('home','registration successful!! Please  login.'));
    }
}
