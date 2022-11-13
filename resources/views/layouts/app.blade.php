<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar" style="background-color:rgb(224, 227, 229);">
        <div class="container-fluid">
            @if (auth()->check())
                <a class="navbar-brand">Welcome <b>{{ auth()->user()->name }}</b></a>
                <a href="{{ route('login.destroy') }}" class="btn btn-dark">Log Out</a>
            @else
            <a class="navbar-brand">App</a>
                <form class="form-inline">
                    <a href="{{ route('login.index') }}" class="btn btn-outline-dark">Log In</a>
                    <a href="{{ route('register.index') }}" class="btn btn-outline-dark">Register</a>
                </form>
            @endif
        </div>
    </nav>

    <div class="vh-100" style="background-color:rgb(224, 227, 229);">

    @yield('content')
</body>
</html>
