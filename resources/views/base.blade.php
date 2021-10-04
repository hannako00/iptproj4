<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="/">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link box text-white" href="/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link box text-white" href="/logs">Logs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link box text-white" href="/logout">Logout</a>
                        </li>
                    @else
                        <li><a class=" nav-link box text-white " href="/login">Login</a></li>
                        <li><a class=" nav-link box text-white" href="/register">Register</a></li>
                    @endif
                </ul>
              </div>
        </div>
    </nav>

    @if (session('Error'))
        <div class="alert alert-danger">
            <div class="container">
                {{session('Error')}}
            </div>
        </div>
    @endif
    @if (session('Message'))
        <div class="alert alert-info">
            <div class="container">
                {{session('Message')}}
            </div>
        </div>
    @endif
    @if (session('errors'))
        <div class="alert alert-danger">
            <div class="container">
                Please fix the following errors
                <ul>
                    @foreach (session('errors')->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="container">
        @yield('content')
    </div>

</body>
</html>
