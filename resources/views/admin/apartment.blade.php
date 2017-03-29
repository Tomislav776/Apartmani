@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
                <h2>{{ $apartment -> name }}</h2>
        </div>

        <div class="row">
            <p>{{ $apartment -> description }}</p>
        </div>

        <div class="row">
            <p>{{ $apartment -> price }} {{ $apartment -> currency }}</p>
        </div>

        <div class="row">
            <p>{{ $apartment -> created_at }}</p>
            <p>{{ $apartment -> updated_at }}</p>
        </div>


        <p>Korisnik: {{ $apartment -> user -> name }}</p>

        <input class="btn btn-success" type="submit" value="Dozvoli">
        <input class="btn btn-danger" type="submit" value="Zabrani">

    </div>



@endsection