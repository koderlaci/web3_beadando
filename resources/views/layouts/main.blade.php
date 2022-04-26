<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The Fish Market</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/market.css') }}" />
        <link href="https://fonts.googleapis.com/css2?family=Red+Rose:wght@300&family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="navbar">
            <div>
                <span class="item">
                    <a href="{{ URL::route('home'); }}">Home</a>
                </span>
                <span class="item">
                    <a href="{{ URL::route('market'); }}">Market</a>
                </span>
            </div>
            <span class="item">Sign in</span>
        </div>
        <main>
            @yield('content')
        </main>
    </body>
</html>
