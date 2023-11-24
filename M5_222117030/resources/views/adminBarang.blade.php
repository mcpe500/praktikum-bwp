<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest</title>
    <link rel="stylesheet" href="{{ asset('styles/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/styles.css') }}">
    <style>
        th,
        td {
            border: 1px solid #000;
        }
    </style>
</head>

<body>
    <div class="container-fluid m-0 p-0">
        <nav class="navbar bg-light-blue">
            <div class="container-fluid">
                <div class="d-flex d-flex flex-grow-1">
                    <a class="navbar-brand" href="{{ url('login') }}">
                        <h1>Admin Suram</h1>
                    </a>
                </div>
                <div class="nav-item p-3">
                    <a href="{{ route('adminLogin') }}" class="text-dark">Master User</a>
                </div>
                <div class="nav-item p-3">
                    <a href="{{ route('adminBarang') }}" class="text-dark">Master Barang</a>
                </div>
                <div class="nav-item p-3">
                    <a href="{{ route('adminKategori') }}" class="text-dark">Master Kategori</a>
                </div>
                <div class="nav-item p-3">
                    <a href="{{ route('adminMerk') }}" class="text-dark">Master Merk</a>
                </div>
                <a href="{{ route('login') }}">
                    <button class="btn btn-logout p-3">
                        <h5>Logout</h5>
                    </button>
                </a>
            </div>
        </nav>
        <div style="background-color: #ECB7B0" class="container-fluid">
            <table class="">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Merk</th>
                    </tr>
                </thead>
                <tbody><?php
                $options = $kategori;
                $options1 = $merk;

                for ($i = 0; $i < count($users); $i++) {
                    $id = $users[$i]['id'];
                    $username = $users[$i]['nama'];
                    $password = $users[$i]['harga'];
                    $starPassword = $users[$i]['harga'];
                    $role = $users[$i]['qty'];

                    $kategori = $users[$i]['kategori'];
                    $roles = '<div class="dropdown">';
                    $roles .= '<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">';
                    $roles .= '-Pilih-';
                    $roles .= '</button>';
                    $roles .= '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
                    foreach ($options as $option) {
                        $optId = $option['id'];
                        $optName = $option['nama'];
                        $checked = '';
                        $isArray = false;
                        if (isset($kategori[0])) {
                            $isArray = true;
                        }

                        if ($isArray) {
                            $found = false;
                            foreach ($kategori as $kat) {
                                if ($kat == $optId) {
                                    $found = true;
                                    break;
                                }
                            }
                            $checked = $found ? 'checked' : '';
                        } else {
                            $checked = $optId == $kategori ? 'checked' : '';
                        }

                        $roles .= '<li>';
                        $roles .= '<div class="form-check">';
                        $roles .= "<input class='form-check-input' type='checkbox' value='$optName' id='option$optId' $checked>";
                        $roles .= "<label class='form-check-label' for='option$optId'>";
                        $roles .= $optName;
                        $roles .= '</label>';
                        $roles .= '</div>';
                        $roles .= '</li>';
                    }
                    $roles .= '</ul>';
                    $roles .= '</div>';
                    $merks = $users[$i]['merk'];

                    $merks1 = '<select>';
                    foreach ($options1 as $option) {
                        $optName = $option['nama'];
                        if ($option['id'] === $merks) {
                            $merks1 .= "<option value='' selected>$optName</option>";
                        } else {
                            $merks1 .= "<option value=''>$optName</option>";
                        }
                    }

                    echo "<tr>
                                                                                                                            <th scope='row'>$id</th>
                                                                                                                            <td>$username</td>
                                                                                                                            <td>$starPassword</td>
                                                                                                                            <td>$role</td>
                                                                                                                            <td>$roles</td>
                                                                                                                            <td>$merks1</td>
                                                                                                                        </tr>";
                }
                ?>
                    <tr>
                        <th scope="row"><input type="number" name="" id=""></th>
                        <td><input type="text" name="" id=""></td>
                        <td><input type="text" name="" id=""></td>
                        <td><input type="text" name="" id=""></td>
                        <td>
                            <?php
                            $roles = '<div class="dropdown">';
                            $roles .= '<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">';
                            $roles .= '-Pilih-';
                            $roles .= '</button>';
                            $roles .= '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
                            foreach ($options as $option) {
                                $optId = $option['id'];
                                $optName = $option['nama'];
                                $checked = '';
                                $roles .= '<li>';
                                $roles .= '<div class="form-check">';
                                $roles .= "<input class='form-check-input' type='checkbox' value='$optName' id='option$optId' $checked>";
                                $roles .= "<label class='form-check-label' for='option$optId'>";
                                $roles .= $optName;
                                $roles .= '</label>';
                                $roles .= '</div>';
                                $roles .= '</li>';
                            }
                            $roles .= '</ul>';
                            $roles .= '</div>';
                            echo $roles;
                            ?>
                        </td>
                        <td>
                            <?php

                            $merks1 = '<select>';
                            $merks1 .= "<option value='' selected>-Pilih-</option>";
                            foreach ($options1 as $option) {
                                $optName = $option['nama'];
                                if ($option['id'] === $merks) {
                                    $merks1 .= "<option value=''>$optName</option>";
                                } else {
                                    $merks1 .= "<option value=''>$optName</option>";
                                }
                            }
                            echo $merks1;
                            ?>
                        </td>
                    </tr>
                    {{-- <tr>
                        <th scope="row">1</th>
                        <td>user1</td>
                        <td></td>
                        <td>KASIR</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>pembelix</td>
                        <td></td>
                        <td>PEMBELI</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>bcd</td>
                        <td></td>
                        <td>KASIR</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>abc</td>
                        <td></td>
                        <td>PEMBELI</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>johndoe</td>
                        <td>*******</td>
                        <td>KASIR</td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
        <footer class="text-center p-5 bg-light-blue">
            <h1 class="px-5">222117030 - Ivan Santoso</h1>
        </footer>
    </div>
    <script src="{{ asset('styles/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('styles/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
