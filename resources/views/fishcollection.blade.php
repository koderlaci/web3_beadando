@extends('layouts.main')

@section('content')
    <h1 style="color: white; text-align: center;">My collection</h1>
    <section class="myfeeds-container" stlye="display: flex;">
        <div class="divider">
            @foreach ($feeds as $feed)
            <div class="post" method="POST">
                @csrf
                <img class="image" src="images/{{$feed->image}}" alt="">
                <div class="details">
                    <div class="fishname">{{$feed->feedName}}</div>
                    <div class="fishname">Quantity: {{$amount}} </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="divider">
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
                <h1>You do not own any fish or feed.</h1>
            @endif
        </div>
    </section>
@endsection
