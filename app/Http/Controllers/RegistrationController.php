<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;

class RegistrationController extends Controller
{
    public function show()
    {
        return view("registration");
    }

    public function registration(Request $request)
    {
        $request->validate([
            "email" => 'required|email',
            "username" => 'required',
            "password" => 'required',
        ]);

        $user = User::create($request->all());

        Auth::login($user);
        Session::put('user', $user);
        $user=Session::get('user');

        return redirect()->route("home");
    }
}
