<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Minify and compress CSS, JS and HTML files</title>

    <!-- Styles -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{asset('images/fav.png')}}" type="image/x-icon"/>
</head>
<body>
<!--Navigation bar-->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">Code <strong>Minifier</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="navigation">
            <ul class="nav navbar-nav navbar-right">
                <li class="css"><a href="{{url('css-minify')}}">Minify CSS</a></li>
                <li class="js"><a href="{{url('js-minify')}}">Minify JS</a></li>
                <li class="html"><a href="{{url('html-minify')}}">Minify HTML</a></li>
                <li class="about"><a href="{{url('about')}}">About</a></li>
                <li class="contact"><a href="{{url('contact')}}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!--Page content-->
<div id="app">
    @yield('content')
</div>

<!--Page footer-->
<footer>
    <div class="container">
        <p>© Code Minifier by <a href="https://ritekrounak.github.io/portfolio/" target="_blank"><span>@</span>Ritek</a></p>
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/typed/dist/typed.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
@yield('script')
</body>
</html>
