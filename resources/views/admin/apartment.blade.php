@extends('layouts.app')

@section('content')

    <div class="container" style="text-align: center">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">
                    {{ $apartment -> name }}
                </h3>
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


            <div class="panel-body">
                <form method="POST" action="{{ url('/admin/' . $apartment ->slug . '/response') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" value="Dozvoli" name="button">Dozvoli</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="well">
            <form method="POST" action="{{ url('/admin/' . $apartment ->slug . '/response') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Poruka</label>
                    <textarea id="message" name="message" placeholder="Unesi poruku korisniku..." class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-danger" value="Zabrani" name="button">Zabrani</button>
                </div>
            </form>
        </div>
    </div>


@endsection