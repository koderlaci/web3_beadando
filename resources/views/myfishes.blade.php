@extends('layouts.main')

@section('content')
    <h1 style="color: white; text-align: center;">My items</h1>
    <section class="myfishes-container">
        @if (count($posts)>0)
        @foreach ($posts as $post)
        <form class="post" method="POST">
            @csrf
            <img class="image" src="images/{{$post->image}}" alt="">
            <div class="details">
                <input type="text" style="display: none;" id="id" name="id" value="{{$post->id}}">
                <input type="text" class="fishname" id="fishName" name="fishName" value="{{$post->fishName}}">
                <div class="price-and-seller">
                    <div>Price:
                        <input type="text" class="price" id="price" name="price" value="{{$post->price}}">
                    </div>
                    <div>Seller: <span class="seller"><strong>you</strong></span></div>
                    <div style="display: flex; justify-content: space-around;">
                        <button class="edit-button">Edit</button>
                        <a class="delete-button" href="{{ route('delete', $post->id) }}">Delete</a>
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
