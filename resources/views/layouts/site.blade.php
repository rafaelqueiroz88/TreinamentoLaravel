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
    
    <header>
        @include('layouts._site._nav')
    </header>
    
    <main>
        @yield('content')    
    </main>

    <footer class="page-footer blue">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Site Dinamico</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="{{route('site.home')}}">Home</a></li>
                        <li><a class="grey-text text-lighten-3" href="{{route('site.sobre')}}">Sobre</a></li>
                        <li><a class="grey-text text-lighten-3" href="{{route('site.contato')}}">Contatos</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <?php echo date("d/m/YY"); ?> Copyright
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>    
    <script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/init.js')}}"></script>
</body>
</html>