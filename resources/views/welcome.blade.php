@extends('layouts.main')

@section('content')
    <section class="hero">
        <div class="wave"></div>
    </section>
    <section class="introduction">
        <div class="title">The Fish Market</div>
        <div class="subtitle">On this website, you can sell and buy fishes to your liking!</div>
        @if (!Auth::check())
        <a href="{{ route('registration') }}">
            <button>Let's get started!</button>
        </a>
        @endif
    </section>
@endsection