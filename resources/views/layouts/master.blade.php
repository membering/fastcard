<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fast Card - @yield('title')</title>

    <link href="{{elixir('css/app.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
<footer>
    <script src="{{elixir('js/app.js')}}"></script>
</footer>
</html>