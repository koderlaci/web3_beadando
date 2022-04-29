@extends('layouts.main')

@section('content')
    <div class="login-container">
        <div class="error">
            @if($errors->any())
            <h2>{{$errors->first()}}</h2>
            @endif
        </div>
        <form action="{{ route('loginStore') }}" method="POST" class="login-form">
            @csrf
            <h1>Login</h1>
            <div class="label-and-input">
                <div class="label">
                    <label>Email: </label>
                </div>
                <input type="text" name="email" id="email">
            </div>
            <div class="label-and-input">
                <div class="label">
                    <label>Password: </label>
                </div>
                <input type="password" name="password" id="password">
            </div>
            <button>Sign in</button>
            <div>Do not have an account? <a class="sign-up" href="{{ URL::route('registration'); }}">Sign up</a></div>
        </form>
    </div>
    <div class="footer"></div>
@endsection
