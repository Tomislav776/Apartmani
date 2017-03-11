<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Apartmani</title>

    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/navigation.css" rel="stylesheet">
    @yield('styles')
</head>

<body>

    <div class="navigation">
        <div class="container">
            @include('partials.navigation')
        </div>
    </div>


    <div class="container">
        @yield('content')
    </div>


    <!--Scripts-->
    <script src="/assets/js/app.js"></script>

</body>