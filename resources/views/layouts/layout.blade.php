<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('sass/app.scss')}}">
        <link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />
        <link rel="stylesheet" href="/css/app.css">

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    </head>
    <body>

        @include('pages.navbar')
        <div class="container">
            @yield('content')
        </div>

        <script src="./resources/app.js"></script>

    </body>
</html>
