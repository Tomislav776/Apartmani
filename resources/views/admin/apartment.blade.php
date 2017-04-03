@extends('layouts.app')

@section('content')

    <div class="container" style="text-align: center">
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

        <form method="POST" action="{{ url('/admin/' . $apartment ->slug . '/response') }}">
            {{ csrf_field() }}
            <input class="btn btn-success" type="submit" value="Dozvoli" name="button">
            <br> <br> <br>
            <input type="textarea" class="form-control" rows="3" placeholder="Unesi poruku korisniku..." name="message">
            <br>
            <input class="btn btn-danger" type="submit" value="Zabrani" name="button">
        </form>



    </div>



@endsection