@extends('layouts.main')

@section('content')
    <h1 style="color: white; text-align: center;">Feeds</h1>
    <section class="myfishes-container">
        <div class="buy-error">
            @if($errors->any())
            <h2>{{$errors->first()}}</h2>
            @endif
        </div>
        @if (count($feeds)>0)
        @foreach ($feeds as $feed)
        <form class="post" method="POST" action="{{ route('buyFeed') }}">
            @csrf
            <img class="image" src="images/{{$feed->image}}" alt="">
            <div class="details">
                <input type="text" style="display: none;" id="id" name="id" value="{{$feed->id}}">
                <input type="text" style="display: none;" id="price" name="price" value="{{$feed->price}}">
                <div class="fishname" id="fishName" name="fishName" style="margin-top: 50px;">{{$feed->feedName}}</div>
                <div class="price-and-seller">
                    <div>Price: <span class="price">{{$feed->price}} $</span></div>
                    <div style="display: flex; justify-content: space-around;">
                        @if (Auth::check())
                            <button class="edit-button">Purchase</button>
                        @endif
                    </div>
                </div>
            </div>
        </form>
        @endforeach
        @else
            <h1>You do not have any fish or feed for sale.</h1>
        @endif
    </section>
@endsection
