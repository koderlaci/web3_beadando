<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The Fish Market</title>
        <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" />
        <link href="https://fonts.googleapis.com/css2?family=Red+Rose:wght@300&family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="navbar">
            <div>
                <span class="item">Home</span>
                <span class="item">Market</span>
            </div>
            <span class="item">Sign in</span>
        </div>
        <section class="hero">
            <div class="wave"></div>
        </section>
        <section class="introduction">
            
            <div class="title">The Fish Market</div>
            <div class="subtitle">On this website, you can sell and buy fishes to your liking!</div>
            <button>Let's get started!</button>
        </section>
    </body>
</html>
