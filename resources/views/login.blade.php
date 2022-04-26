@extends('layouts.main')

@section('content')
    <div class="login-container">
        <form action="submit" class="login-form">
            <h1>Login</h1>
            <div class="label-and-input">
                <div class="label">
                    <label>Email: </label>
                </div>
                <input type="text">
            </div>
            <div class="label-and-input">
                <div class="label">
                    <label>Password: </label>
                </div>
                <input type="password">
            </div>
            <button type="submit">Sign in</button>
            <div>Do not have an account? <a class="sign-up" href="{{ URL::route('registration'); }}">Sign up</a></div>
        </form>
    </div>
@endsection
