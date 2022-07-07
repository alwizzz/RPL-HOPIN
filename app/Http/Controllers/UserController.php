<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }
    
    public function register(){
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }

    public function authenticate(Request $request) 
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        
        $validatedCredential = $request->validate($rules);
        if(Auth::attempt($validatedCredential)){
            $request->session()->regenerate();
            return redirect('/');
        }
        // dd($validatedCredential);
        return back()->with('login_fail', 'Login failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
