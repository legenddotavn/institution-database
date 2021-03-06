<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">--}}

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link rel="stylesheet" type="text/css" href="/assets/css/sandstone-bootstrap.min.css"> --}}
    {{--<link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="/assets/css/app.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic,300italic,300,500italic,500&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            font-size:15px;
        }

        .fa-btn {
            margin-right: 6px;
        }
        a:hover, a:focus {
            text-decoration: none;
        }
        #sidebar td:hover{
            border-left: 2px solid red;
        }
        #sidebar td {
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.14);
        }
        .panel-title {
            font-size: 18px;
        }
        .tab-pane {
            display: none;
        }
        .tab-pane.active {
            display:block;
        }
        th, label {
            font-weight: 500;
        }
        label {
            text-align: left!important;
        }
        td, .vertical-middle {
            vertical-align: middle!important;
        }
        table {
            margin-bottom: 0!important;
        }
        .font-normal {
            font-weight: 300;
        }
        .panel .panel-heading, .panel .panel-title {
            font-size:15px;
        }
        .navbar .nav>li>a {
            font-size: 15px;
            text-transform: none;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    {{--<li><a href="{{ url('/home') }}">Home</a></li>--}}
                    <li><a href="{{ url('/assessors') }}">Thông tin Kiểm định viên</a></li>
                    <li><a href="{{ url('/institution') }}">Dữ liệu cơ sở giáo dục</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="/assets/js/sar.js"></script>
    @stack('footer-scripts')
</body>
</html>
