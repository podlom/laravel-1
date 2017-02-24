<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Jumbotron</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jumbotron.css') }}">

    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">{{ $header }}</a>
                </div>
                <ul id="navbar" class="menu">
                    <li><a href="google.com">Google</a></li>
                    <li><a href="habrahabr.ru">Habrahabr</a></li>
                    <li><a href="facebook.com">Facebook</a></li>
                </ul><!--/.navbar-collapse -->
            </div>
        </nav>
        <hr>
        @yield('content')

    </body>
</html>
