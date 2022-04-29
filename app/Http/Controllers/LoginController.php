<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;
use Redirect;

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

        $user = User::where('email','=',$request->email)->where('password','=',$request->password)->first();

        if ($user) {
            Session::put('user', $user);
            $user=Session::get('user');

            return redirect()->route("home");
        }
        else {
            return Redirect::back()->withErrors(['msg' => 'Incorrect email or password.']);
        }

        return redirect()->route("home");
    }
}
