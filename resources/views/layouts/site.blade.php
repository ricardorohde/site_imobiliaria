<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/materialize/dist/css/materialize.css')}}">
    <!-- asset já reconhece public -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

</head>
<body id="app">
    <header>
      @include('layouts._site._nav')
    </header>
    <main>
      @yield('content')
    </main>
   @include('layouts._site._footer')
   <script src="{{asset('lib/jquery/dist/jquery.js')}}"></script>
   <script src="{{asset('lib/materialize/dist/js/materialize.js')}}"></script>
   <script src="{{asset('js/init.js')}}"></script>
</body>
</html>
