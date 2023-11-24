<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('styles/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/styles.css') }}">
</head>

<body>
    <nav class="navbar bg-primary fixed-top">
        <div class="container-fluid text-light">
            <a href="#" class="navbar-brand text-light">
                <h1>AJAIP</h1>
            </a>
            @yield('open-navbar')
    </nav>
    <div class="p-5"></div>
    <div class="container-fluid">
        @yield('content')
    </div>
    <div class="p-5"></div>
    <footer class="d-flex justify-content-center text-light bg-primary fixed-bottom">
        <h2 class="p-4">222117030 - Ivan Santoso</h2>
    </footer>
    <script src="{{ asset('styles/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('styles/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
