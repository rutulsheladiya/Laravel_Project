<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
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
        session()->flash('message','Registration Completed Successfully...');
        return redirect('register');
    }
}