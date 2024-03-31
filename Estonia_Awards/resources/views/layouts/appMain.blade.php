<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel NewsPortal Main site</title>
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("/components/css/style.css") }}">
</head>
<body id="app-layout">
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a class="navbar-brand" href="{{ url('/') }}">Home</a></li>
                <li><a class="navbar-brand" href="{{ url('/news') }}">News</a></li>
            </ul>
            <form action="{{ url('search') }}" method="GET" class="navbar-form navbar-right">
                <div class="form-group">
                    <label for="searchQuery">Search:</label>
                    <input type="text" name="searchQuery" id="searchQuery" class="form-control" value="{{ $searchQuery ?? '' }}">
                </div>
                <button type="submit" class="btn btn-primary">Search</button>

                @if(isset($sortinglist))
                    @foreach ($sortinglist as $option)
                        <input type="hidden" name="sort" value="{{ $option }}">
                    @endforeach
                @endif
            </form>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}" class="navbar-brand">Login</a></li>
                    <li><a href="{{ url('/register') }}" class="navbar-brand">Register</a></li>
                @else
                    <li><a href="{{ url('/dashboard') }}" class="navbar-brand">Admin panel</a></li>
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

<div class="content" style="min-height: 450px; height: 100%;">
    @yield('content')
</div>

<footer class="footer">
    <div class="container">
        <span class="text-muted">2024 Laravel News Portal Design&copy; Main site</span>
    </div>
</footer>

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
