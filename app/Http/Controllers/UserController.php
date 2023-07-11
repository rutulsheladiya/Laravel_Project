<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function registerUser(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'cpassword' => 'required|same:password',
            'mobilenumber' => 'required'
        ]);
        $userData = new User;
        $userData->name = $request->username;
        $userData->email = $request->email;
        $userData->password = Hash::make($request->password);
        $userData->mobilenumber =  $request->mobilenumber;
        $userData->save();
        session()->flash('message', 'Registration Completed Successfully...');
        return redirect('register');
    }
    function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);
        $credentials = [
            "email" => $request->email,
            "password" => $request->password
        ];
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            session(['username'=>$user->name]);
            return redirect('dashboard');
        } else {
            return back()->withErrors([
                'email' => 'Invalid Credentials',
            ]);
        }
    }
}
