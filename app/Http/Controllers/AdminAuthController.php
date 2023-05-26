<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{

    // public function login(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     if (Auth::guard('admin')->attempt($credentials)) {
    //         // Authentication successful
    //         return redirect()->intended('/admin/dashboard');
    //     }

    //     // Authentication failed
    //     return redirect()->back()->withErrors(['message' => 'Invalid credentials']);
    // }

    // public function logout()
    // {
    //     Auth::guard('admin')->logout();
    //     return redirect('/admin/login');
    // }

    public function register(){
        return view('admin.register');
    }

    public function registerUser(Request $request){
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash::make($request->password);

        $user->save();
        return back()->with('success', 'Register successfully');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function loginUser(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)){
            return redirect('/')->with('success', 'Login successfull');
        }

        return back()->with('error', 'Email or Password incorrect');

    }

    public function logout(){
        Auth::logout();

        return redirect()->route('admin.login');
    }
}
