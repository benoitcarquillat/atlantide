<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Atlantide</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900" rel="stylesheet">
</head>
<body>

    @include('templates/nav')

    <div id="app">
        @yield('content')
    </div>

    @include('templates/footer')
    @if(request()->route()->getName() == '')
    <!-- Scripts -->
    <script src="{{ asset('js/library/rellax.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    @endif

</body>
</html>
