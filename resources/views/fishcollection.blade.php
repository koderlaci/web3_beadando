@extends('layouts.main')

@section('content')
    <h1 style="color: white; text-align: center;">My fish collection</h1>
    <section class="myfishes-container">
        @if (count($posts)>0)
        @foreach ($posts as $post)
        <div class="post" action="" method="POST">
            <img class="image" src="images/{{$post->image}}" alt="">
            <div class="details">
                <div class="fishname">{{$post->fishName}}</div>
            </div>
        </div>
        @endforeach
        @else
            <h1>You do not own any fish.</h1>
        @endif
    </section>
@endsection
