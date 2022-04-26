@extends('layouts.main')

@section('content')
    <div class="registration-container">
        <form action="{{ route('registrationStore') }}" method="POST" class="registration-form">
            @csrf
            <h1>Registration</h1>
            <div class="label-and-input">
                <div class="label">
                    <label>Email: </label>
                </div>
                <input type="text" name="email" id="email">
            </div>
            <div class="label-and-input">
                <div class="label">
                    <label>Username: </label>
                </div>
                <input type="text" name="username" id="username">
            </div>
            <div class="label-and-input">
                <div class="label">
                    <label>Password: </label>
                </div>
                <input type="password" name="password" id="password">
            </div>
            <button>Sign up</button>
        </form>
    </div>
@endsection
