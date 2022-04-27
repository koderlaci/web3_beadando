<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view("login");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "email" => 'required',
            "password" => 'required',
        ]);

        $user = User::where('email','=',$request->email)->first();

        if ($user) {
            dd($user);
            return redirect()->route("home");
        }
        else {
            return back()->with("error", "Incorrect email or password");
        }

        return redirect()->route("home");
    }
}
