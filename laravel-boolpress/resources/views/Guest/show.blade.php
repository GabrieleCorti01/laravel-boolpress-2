@extends('layouts.app')

<div class="card-wrapper">

    @section('content')
        <div class="container row">

            <div class="col-6">
                <h2>{{ $book->name }}</h2>
                <h3>{{ $book->author }}</h3>
                <p>{{ $book->description }}</p>
            </div>

            <div class="col-6"> 
                <img src="{{ $book->img_url }}" alt="">
            </div>

        </div>
    @endsection
</div>