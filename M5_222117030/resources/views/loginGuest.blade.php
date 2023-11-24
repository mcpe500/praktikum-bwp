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
                    <a href="{{route('guestBarang')}}" class="text-dark">Barang</a>
                </div>
                <div class="nav-item p-3">
                    <a href="{{route('guestAbout')}}" class="text-dark">About</a>
                </div>
                <a href="{{ route('login') }}">
                    <button class="btn btn-logout p-3">
                        <h5>Logout</h5>
                    </button>
                </a>
            </div>
        </nav>
        <div class="content">
            <section class="one bg-krem ps-3">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/jumbo_kiri.jpg') }}" alt="" class="rounded-circle"
                        width="250px" height="250px">
                    <div class="d-flex align-items-center justify-content-center text-light border-dark"
                        style="font-size:100px;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
                        < </div>
                            <img src="{{ asset('assets/img/jumbo_tengah.jpg') }}" alt="" class="rounded-circle"
                                width="300px" height="300px">
                            <div class="d-flex align-items-center justify-content-center text-light border-dark"
                                style="font-size: 100px;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
                                >
                            </div>
                            <img src="{{ asset('assets/img/jumbo_kanan.jpg') }}" alt="" class="rounded-circle"
                                width="250px" height="250px">
                    </div>
            </section>

            <section class="two p-3">
                <h2>Top Product</h2>
                <div class="row row-cols-1 row-cols-md-2 g-4 text-center">
                    <div class="col">
                        <div class="card bg-product">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data0['id'] }}</h5>
                                <p class="card-text">{{ $data0['nama'] }}</p>
                                <p class="card-text">Rp{{ $data0['harga'] }}</p>
                                <p class="card-text">{{ $data0['kategori'] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-product">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data1['id'] }}</h5>
                                <p class="card-text">{{ $data1['nama'] }}</p>
                                <p class="card-text">Rp{{ $data1['harga'] }}</p>
                                <p class="card-text">{{ $data1['kategori'] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-product">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data2['id'] }}</h5>
                                <p class="card-text">{{ $data2['nama'] }}</p>
                                <p class="card-text">Rp{{ $data2['harga'] }}</p>
                                <p class="card-text">{{ $data2['kategori'] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-product">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data3['id'] }}</h5>
                                <p class="card-text">{{ $data3['nama'] }}</p>
                                <p class="card-text">Rp{{ $data3['harga'] }}</p>
                                <p class="card-text">{{ $data3['kategori'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="text-center p-5 bg-light-blue">
                <h1 class="px-5">222117030 - Ivan Santoso</h1>
            </footer>
        </div>
    </div>
    <script src="{{ asset('styles/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('styles/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
