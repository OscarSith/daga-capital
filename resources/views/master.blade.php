<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Daga - Capital</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-57-precomposed.png') }}">
</head>

<body>
    @yield('loader')
    <header id="navigation">
        <div class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}"><h1><img src="{{ asset('images/logo.png') }}" alt="Logo Daga Capital" width="250"></h1></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="scroll {{ $section == 'home' ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                        <li class="scroll"><a class="border" href="{{ url('/')}}/#services">Services</a></li>
                        <li class="scroll"><a class="border" href="{{ url('/')}}/#about-us">About Us</a></li>
                        <li class="scroll"><a class="border" href="{{ url('/')}}/#portfolio">Portfolio</a></li>
                        <li class="scroll"><a class="border" href="{{ url('/')}}/#clients">Clients</a></li>
                        <li class="scroll {{ $section == 'blog' ? 'active' : '' }}"><a class="border" href="#blog">Blog</a></li>
                        <li class="scroll"><a class="border" href="{{ url('/')}}/#footer">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    @section('body')
    @show
</body>
</html>