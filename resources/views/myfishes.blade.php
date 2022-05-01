@extends('layouts.main')

@section('content')
    <h1 style="color: white; text-align: center;">My fishes</h1>
    <section class="myfishes-container">
        @if (count($posts)>0)
        @foreach ($posts as $post)
        <form class="post" action="" method="POST">
            @csrf
            <img class="image" src="images/{{$post->image}}" alt="">
            <div class="details">
                <input type="text" style="display: none;" id="id" name="id" value="{{$post->id}}">
                <input type="text" class="fishname" id="fishName" name="fishName" placeholder="{{$post->fishName}}">
                <div class="price-and-seller">
                    <div>Price:
                        <input type="text" class="price" id="price" name="price" placeholder="{{$post->price}}">
                    </div>
                    <div>Seller: <span class="seller"><strong>you</strong></span></div>
                    <button class="edit-button">Edit</button>
                </div>
            </div>
        </form>
        @endforeach
        @else
            <h1>You do not have any fish for sale.</h1>
        @endif
    </section>
@endsection
