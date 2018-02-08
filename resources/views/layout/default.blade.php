<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>XML Vue @yield('title')</title>

	<!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	@yield('css')
</head>
<body>
	<div id="app">
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
                        XML Vue
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">             
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">  
                        <li>
                            <a href="{{ route('data.display') }}">Display Hotels</a>
                        </li>
                        <li>
                            <a>Upload Data</a>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>