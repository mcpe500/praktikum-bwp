<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest</title>
    <link rel="stylesheet" href="{{ asset('styles/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/styles.css') }}">

</head>

<body>
    <div class="container-fluid m-0 p-0">
        <nav class="navbar bg-light-blue">
            <div class="container-fluid">
                <div class="d-flex d-flex flex-grow-1">
                    <a class="navbar-brand" href="{{ url('login') }}">
                        <h1>Suram Shop</h1>
                    </a>
                </div>
                <div class="nav-item p-3">
                    <a href="{{ route('guestLogin') }}" class="text-dark">Dashboard</a>
                </div>
                <div class="nav-item p-3">
                    <a href="{{ route('guestBarang') }}" class="text-dark">Barang</a>
                </div>
                <div class="nav-item p-3">
                    <a href="{{ route('guestAbout') }}" class="text-dark">About</a>
                </div>
                <a href="{{ route('login') }}">
                    <button class="btn btn-logout p-3">
                        <h5>Logout</h5>
                    </button>
                </a>
            </div>
        </nav>
        <div class="content d-flex flex-column justify-content-center align-items-center">
            <br>
            <br>
            <img src="{{ asset('assets/img/about.png') }}" alt="" class="rounded-circle" width="300px"
                height="300px">
            <h1><b>Surap Shop</b></h1>
            <b>Jalan Apalah No. 12</b>
            <b>031-5012345</b>
            <br>
            <b>Jumlah Barang : {{ $panjangData }}</b>
            <br>
            <br>
        </div>
        <footer class="text-center p-5 bg-light-blue">
            <h1 class="px-5">222117030 - Ivan Santoso</h1>
        </footer>
    </div>
    <script src="{{ asset('styles/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('styles/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
