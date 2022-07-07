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

    public function store(Request $request)
    {
        $rules = [
            'nama_lengkap' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'password' => 'required',
            'password2' => 'required|same:password',
        ];

        $validatedData = $request->validate($rules);
        $validatedData['password'] = bcrypt($validatedData['password']); 
        $validatedData['total_exp'] = 0; 
        $validatedData['total_qmr'] = 0; 
        $validatedData['level'] = 1; 
        $validatedData['rank_id'] = 1; 
        // dd($validatedData);
        User::create($validatedData);

        return redirect('/login')->with('register_success', 'Account has been registered! Please Login!');
    }
}
