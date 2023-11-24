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
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Role</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($users); $i++) {
                        $id = $users[$i]['id'];
                        $username = $users[$i]['username'];
                        $password = $users[$i]['password'];
                        $starPassword = '';
                        for ($j = 0; $j < strlen($password); $j++) {
                            $starPassword .= '*';
                        }

                        $role = $users[$i]['role'];

                        $options = ['KASIR', 'PEMBELI'];

                        $roles = '<select>';
                        foreach ($options as $option) {
                            if ($option === $role) {
                                $roles .= "<option value='$option' selected>$option</option>";
                            } else {
                                $roles .= "<option value='$option'>$option</option>";
                            }
                        }
                        $roles .= '</select>';
                        echo '<tr>
                                                <th scope="row">' .
                            $id .
                            '</th>
                                                <td>' .
                            $username .
                            '</td>
                                                <td>' .
                            $starPassword .
                            '</td>
                                                <td>' .
                            $roles .
                            '</td>
                                            </tr>';
                    }
                    ?>
                    <tr>
                        <th scope="row"><input type="number" name="" id=""></th>
                        <td><input type="text" name="" id=""></td>
                        <td><input type="text" name="" id=""></td>
                        <td><select name="" id="">
                            <option value="" selected>KASIR</option>
                            <option value="">PEMBELI</option>
                        </select></td>
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
