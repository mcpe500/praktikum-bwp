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
        <section class="two p-3">
            <div class="row">
                <div class="d-flex flex-column">
                    <div class="col">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col">
                            <label class="" for="kategori">Kategori</label>
                            <select class="form-select" id="kategori">
                                <option value="">-None-</option>
                                <?php
                                foreach ($kategories as $key => $value) {
                                    $nama = $value['nama'];
                                    $id = $value['id'];
                                    echo "<option value='$id'>$nama</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col">
                            <label class="" for="merk">Merk</label>
                            <select class="form-select" id="merk">
                                <option value="">-None-</option>
                                <?php
                                foreach ($merks as $key => $value) {
                                    $nama = $value['nama'];
                                    $id = $value['id'];
                                    echo "<option value='$id'>$nama</option>";
                                } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 g-4 text-center">
                    <?php
                    for ($i = 0; $i < count($data); $i++) {
                        $value = $data[$i];
                        $id = $value['id'];
                        $nama = $value['nama'];
                        $harga = $value['harga'];
                        $kategori = $value['kategori'];
                        echo '<div class="col">
                                                                                            <div class="card bg-product">
                                                                                                <div class="card-body">
                                                                                                    <h5 class="card-title">' .
                            $id .
                            '</h5>
                                                                                                    <p class="card-text">' .
                            $nama .
                            '</p>
                                                                                                    <p class="card-text">Rp ' .
                            $harga .
                            '</p>
                                                                                                    <p class="card-text">' .
                            $kategori .
                            '</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>';
                    }
                    // foreach ($data as $key => $value) {
                    // }
                    ?>
                    {{-- <div class="col">
                        <div class="card bg-product">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data0['id'] }}</h5>
                                <p class="card-text">{{ $data0['nama'] }}</p>
                                <p class="card-text">Rp{{ $data0['harga'] }}</p>
                                <p class="card-text">{{ $data0['kategori'] }}</p>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col">
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
                    </div> --}}
                </div>
        </section>
        <footer class="text-center p-5 bg-light-blue">
            <h1 class="px-5">222117030 - Ivan Santoso</h1>
        </footer>
    </div>
    <script src="{{ asset('styles/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('styles/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
