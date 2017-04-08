@extends('layouts.app')

@section('content')

    @include('partials.navigation-admin')

    <div class="container col-md-8">

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"> {{ $user -> name }} </h3>
            </div>

            <div class="panel-body">
                <form action="{{ url('/admin/users/' . $user ->slug . '/update') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}


                    <label class="control-label">E-mail</label> <br>
                    <input id="email" name="email" type="text" placeholder="{{ $user -> email }}" class="form-control" value="{{ $user -> email }}">

                    <div class="form-group">
                        <label for="role" class="control-label">
                            Odaberi ulogu
                        </label>
                        <select id="role" class="form-control" name="role" required>
                            <option value="2" @if( $user -> role ->role == "User") selected @endif  >Korisnik</option>
                            <option value="3" @if( $user -> role ->role == "Client") selected @endif >Klijent</option>
                            <option value="1" @if( $user -> role ->role == "Admin") selected @endif >Admin</option>
                        </select>
                    </div>

                    <label class="control-label">Napravljen</label> <br>
                    <p>{{ $user -> created_at -> diffForHumans() }}</p>
                    <label class="control-label">Zadnja promjena</label> <br>
                    <p>{{ $user -> updated_at -> diffForHumans() }}</p>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Izmijeni</button>
                    </div>

                </form>


            </div>
        </div>
    </div>
    </div>

    <div class="container col-md-8 col-md-offset-3" style="text-align: center">

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"> Aktivni oglasi </h3>
            </div>


        </div>

    </div>

    <div class="container col-md-8 col-md-offset-3" style="text-align: center">

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"> Neaktivni oglasi </h3>
            </div>


        </div>

    </div>

    <div class="container col-md-8 col-md-offset-3" style="text-align: center">

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"> Zabranjeni oglasi </h3>
            </div>


        </div>

    </div>



@endsection