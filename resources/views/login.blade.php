@extends('layouts.main')

@section('content')
    <div class="login-container">
        @if (count($errors) > 0)
            <div class="div" stlye="height: 500px; background-color:red;">{{ $errors }}</div>
        @endif
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
@endsection
