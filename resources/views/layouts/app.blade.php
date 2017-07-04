<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <title>{{ config('app.name', 'Laravel') }}</title>

</head>
<body id="app-layout">
    
    

    @yield('content')    

    

    <!-- Scripts -->
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>    
    <script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/init.js')}}"></script>
</body>
</html>
