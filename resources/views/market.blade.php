@extends('layouts.main')

@section('content')
    <h1 style="color: white; text-align: center;">The Market</h1>
    <form class="searchbar" action="{{ route('market') }}">
        @csrf
        <input name="searchValue" id="searchValue" type="text">
        <button>Search</button>
    </form>
    <div class="buy-error">
        @if($errors->any())
        <h2>{{$errors->first()}}</h2>
        @endif
    </div>
    <section class="market-container">
        @if (count($posts)>0)
        @foreach ($posts as $post)
        <form class="post" action="{{ route('buy') }}" method="POST">
            @csrf
            <img class="image" src="images/{{$post->image}}">
            <div class="details">
                <input type="text" style="display: none;" id="postId" name="postId" value="{{$post->id}}">
                <input type="number" style="display: none;" id="price" name="price" value="{{$post->price}}">
                <input type="text" style="display: none;" id="sellerId" name="sellerId" value="{{$post->seller_id}}">
                <div class="fishname">{{$post->fishName}}</div>
                <div class="price-and-seller">
                    <div>Price: <span class="price">{{$post->price}} $</span></div>
                    <div>Seller: <span class="seller">{{ \App\Models\User::where(['id' => $post->seller_id])->pluck('username')[0] }}</span></div>
                    @if (Auth::check() && auth()->user()->id != $post->seller_id)
                        <button class="purchase-button">Purchase</button>
                    @endif
                </div>
            </div>
        </form>
        @endforeach
        @else
            <h1>Could not found any fish</h1>
        @endif
    </section>
@endsection
