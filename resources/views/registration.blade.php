@extends('layouts.main')

@section('content')
    <div class="registration-container">
        <form action="submit" class="registration-form">
            <h1>Registration</h1>
            <div class="label-and-input">
                <div class="label">
                    <label>Email: </label>
                </div>
                <input type="text">
            </div>
            <div class="label-and-input">
                <div class="label">
                    <label>Username: </label>
                </div>
                <input type="text">
            </div>
            <div class="label-and-input">
                <div class="label">
                    <label>Password: </label>
                </div>
                <input type="password">
            </div>
            <button type="submit">Sign up</button>
        </form>
    </div>
@endsection
