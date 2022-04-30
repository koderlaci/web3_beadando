@extends('layouts.main')

@section('content')
    <section class="market-container">
        <div class="searchbar">
            <a href="{{ route('sellfish') }}">
                <button>Sell fish</button>
            </a>
            <input type="text">
            <button>Search</button>
        </div>
        @foreach ($posts as $post)
        <div class="post">
            <img class="image" src="images/{{$post->image}}" alt="">
            <div class="details">
                <div class="fishname">{{$post->fishName}}</div>
                <div class="price-and-seller">
                    <div>Price: <span class="price">{{$post->price}} $</span></div>
                    <div>Seller: <span class="seller">{{ \App\Models\User::where(['id' => $post->seller_id])->pluck('username')[0] }}</span></div>
                    <button class="purchase-button">Purchase</button>
                </div>
            </div>
        </div>
        @endforeach
    </section>
@endsection
