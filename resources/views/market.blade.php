@extends('layouts.main')

@section('content')
    <h1 style="color: white; text-align: center;">The Fish Market</h1>
    <form class="searchbar" action="{{ route('market') }}">
        @csrf
        <input name="searchValue" id="searchValue" type="text">
        <button>Search</button>
    </form>
    <section class="market-container">
        @if (count($posts)>0)
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
        @else
            <h1>Could not found any fish</h1>
        @endif
    </section>
@endsection
