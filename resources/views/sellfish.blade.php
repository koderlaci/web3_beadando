@extends('layouts.main')

@section('content')
    <div class="sellfish-container">
        <div class="error">
            @if($errors->any())
            <h2>{{$errors->first()}}</h2>
            @endif
        </div>
        <form action="{{ route('sell') }}" method="POST" class="sellfish-form">
            @csrf
            <h1>Sell your fish here</h1>
            <div class="label-and-input">
                <div class="label">
                    <label>Fish Name </label>
                </div>
                <input type="text" name="fishName" id="fishName">
            </div>
            <div class="label-and-input">
                <div class="label">
                    <label>Image: </label>
                </div>
                <select name="image" id="image">
                    <option value="harcsa.jpg">Harcsa</option>
                    <option value="lazac.jpg">Lazac</option>
                    <option value="mandarinhal.jpg">Mandarinhal</option>
                    <option value="pisztrang.jpg">Pisztráng</option>
                    <option value="sullo.jpg">Süllő</option>
                </select>
            </div>
            <div class="label-and-input">
                <div class="label">
                    <label>Price: </label>
                </div>
                <input type="text" name="price" id="price">
            </div>
            <button>Upload</button>
        </form>
    </div>
    <div class="footer"></div>
@endsection