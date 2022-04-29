<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

        User::create($request->all());

        return redirect()->route("home");
    }
}
