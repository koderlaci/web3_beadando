@extends('layouts.main')

@section('content')
    <section class="market-container">
        @foreach ($posts as $post)
        <div class="post">
            <div class="image"></div>
            <div class="details">
                <div class="fishname">{{$post->fishName}}</div>
                <div class="price-and-seller">
                    <div>Price: <span class="price">{{$post->price}}</span></div>
                    <div>Seller: <span class="seller">{{$post->seller_id}}</span></div>
                    <button class="purchase-button">Purchase</button>
                </div>
            </div>
        </div>
        @endforeach
    </section>
@endsection
