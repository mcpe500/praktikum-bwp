<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    static $barang = [
        [
            "id" => "M0001",
            "nama" => "Macbook Pro 256GB Bundling",
            "harga" => 18300000,
            "qty" => 10,
            "kategori" => [1, 2, 9],
            "merk" => 7
        ],
        [
            "id" => "M0002",
            "nama" => "Macbook Pro 512GB",
            "harga" => 19449000,
            "qty" => 15,
            "kategori" => 1,
            "merk" => 7
        ],
        [
            "id" => "L0001",
            "nama" => "Logitech Wireless Keyboard",
            "harga" => 450000,
            "qty" => 20,
            "kategori" => 2,
            "merk" => 9
        ],
        [
            "id" => "S0001",
            "nama" => "Samsung Galaxy S21",
            "harga" => 10500000,
            "qty" => 2,
            "kategori" => 3,
            "merk" => 5
        ],
        [
            "id" => "X0001",
            "nama" => "Xiaomi Redmi Note 10",
            "harga" => 2800000,
            "qty" => 12,
            "kategori" => 3,
            "merk" => 4
        ],
        [
            "id" => "M0003",
            "nama" => "MSI Gaming Laptop Bundling",
            "harga" => 21000000,
            "qty" => 8,
            "kategori" => [1, 2],
            "merk" => 11
        ],
        [
            "id" => "R0001",
            "nama" => "Rexus Mechanical Keyboard",
            "harga" => 750000,
            "qty" => 25,
            "kategori" => 2,
            "merk" => 6
        ],
        [
            "id" => "O0001",
            "nama" => "Oppo F19 Pro",
            "harga" => 4200000,
            "qty" => 18,
            "kategori" => 3,
            "merk" => 2
        ],
        [
            "id" => "A0001",
            "nama" => "Apple iMac 27",
            "harga" => 29990000,
            "qty" => 10,
            "kategori" => 9,
            "merk" => 7
        ],
        [
            "id" => "L0002",
            "nama" => "Logitech Wireless Mouse",
            "harga" => 200000,
            "qty" => 50,
            "kategori" => 5,
            "merk" => 9
        ],
        [
            "id" => "S0002",
            "nama" => "SanDisk Ultra 128GB Flash Drive",
            "harga" => 150000,
            "qty" => 40,
            "kategori" => 6,
            "merk" => 10
        ],
        [
            "id" => "N0001",
            "nama" => "NVIDIA GeForce RTX 3080",
            "harga" => 9000000,
            "qty" => 5,
            "kategori" => 8,
            "merk" => 8
        ],
        [
            "id" => "S0003",
            "nama" => "Samsung Wireless Headphones",
            "harga" => 600000,
            "qty" => 30,
            "kategori" => 4,
            "merk" => 5
        ],
        [
            "id" => "L0003",
            "nama" => "Lenovo ThinkPad X1 Carbon",
            "harga" => 18000000,
            "qty" => 10,
            "kategori" => 1,
            "merk" => 3
        ],
        [
            "id" => "X0002",
            "nama" => "Xiaomi Mi 11",
            "harga" => 3500000,
            "qty" => 20,
            "kategori" => 3,
            "merk" => 4
        ],
        [
            "id" => "A0002",
            "nama" => "Apple Magic Keyboard",
            "harga" => 1500000,
            "qty" => 15,
            "kategori" => 2,
            "merk" => 7
        ],
        [
            "id" => "A0003",
            "nama" => "ASUS ROG Strix Gaming Laptop",
            "harga" => 23000000,
            "qty" => 8,
            "kategori" => 1,
            "merk" => 1
        ],
        [
            "id" => "M0004",
            "nama" => "MSI MPG B550 Gaming Motherboard",
            "harga" => 2500000,
            "qty" => 3,
            "kategori" => 1,
            "merk" => 11
        ],
        [
            "id" => "S0004",
            "nama" => "Samsung Galaxy Tab S7",
            "harga" => 7000000,
            "qty" => 10,
            "kategori" => 9,
            "merk" => 5
        ],
        [
            "id" => "L0004",
            "nama" => "Logitech Gaming Mouse",
            "harga" => 800000,
            "qty" => 20,
            "kategori" => 5,
            "merk" => 9
        ],
        [
            "id" => "S0005",
            "nama" => "SanDisk Extreme 64GB Flash Drive",
            "harga" => 100000,
            "qty" => 30,
            "kategori" => 6,
            "merk" => 10
        ],
        [
            "id" => "N0002",
            "nama" => "NVIDIA GeForce GTX 1660",
            "harga" => 3000000,
            "qty" => 8,
            "kategori" => 8,
            "merk" => 8
        ],
        [
            "id" => "S0006",
            "nama" => "Sony Noise-Cancelling Headphones",
            "harga" => 800000,
            "qty" => 15,
            "kategori" => 4,
            "merk" => 12
        ],
        [
            "id" => "L0005",
            "nama" => "Lenovo Yoga C740 2-in-1 Laptop",
            "harga" => 12000000,
            "qty" => 10,
            "kategori" => 1,
            "merk" => 3
        ],
        [
            "id" => "O0002",
            "nama" => "Oppo A54",
            "harga" => 2300000,
            "qty" => 20,
            "kategori" => 3,
            "merk" => 2
        ]
    ];

    static $kategori = [
        [
            "id" => 1,
            "nama" => "Laptop"
        ],
        [
            "id" => 2,
            "nama" => "Keyboard"
        ],
        [
            "id" => 3,
            "nama" => "Handphone"
        ],
        [
            "id" => 4,
            "nama" => "Headphone"
        ],
        [
            "id" => 5,
            "nama" => "Mouse"
        ],
        [
            "id" => 6,
            "nama" => "Flashdisk"
        ],
        [
            "id" => 7,
            "nama" => "RAM"
        ],
        [
            "id" => 8,
            "nama" => "VGA"
        ],
        [
            "id" => 9,
            "nama" => "Monitor"
        ]
    ];

    static $merk = [
        [
            "id" => 1,
            "nama" => "ASUS"
        ],
        [
            "id" => 2,
            "nama" => "OPPO"
        ],
        [
            "id" => 3,
            "nama" => "LENOVO"
        ],
        [
            "id" => 4,
            "nama" => "XIAOMI"
        ],
        [
            "id" => 5,
            "nama" => "SAMSUNG"
        ],
        [
            "id" => 6,
            "nama" => "REXUS"
        ],
        [
            "id" => 7,
            "nama" => "APPLE"
        ],
        [
            "id" => 8,
            "nama" => "NVIDIA"
        ],
        [
            "id" => 9,
            "nama" => "LOGITECH"
        ],
        [
            "id" => 10,
            "nama" => "SANDISK"
        ],
        [
            "id" => 11,
            "nama" => "MSI"
        ],
        [
            "id" => 12,
            "nama" => "SONY"
        ]
    ];

    static $users = [
        [
            "id" => 1,
            "username" => "user1",
            "password" => "user1",
            "role" => "KASIR"
        ],
        [
            "id" => 2,
            "username" => "pembelix",
            "password" => "pembelix",
            "role" => "PEMBELI"
        ],
        [
            "id" => 3,
            "username" => "bcd",
            "password" => "cbd",
            "role" => "KASIR"
        ],
        [
            "id" => 4,
            "username" => "abc",
            "password" => "abc",
            "role" => "PEMBELI"
        ],
        [
            "id" => 5,
            "username" => "johndoe",
            "password" => "johndoe123",
            "role" => "KASIR"
        ],
        [
            "id" => 6,
            "username" => "emily",
            "password" => "emily",
            "role" => "KASIR"
        ],
        [
            "id" => 7,
            "username" => "max",
            "password" => "max",
            "role" => "PEMBELI"
        ],
        [
            "id" => 8,
            "username" => "asd",
            "password" => "asd",
            "role" => "PEMBELI"
        ],
        [
            "id" => 9,
            "username" => "sammy9",
            "password" => "sammy9",
            "role" => "KASIR"
        ],
        [
            "id" => 10,
            "username" => "def",
            "password" => "def",
            "role" => "PEMBELI"
        ],
        [
            "id" => 11,
            "username" => "tes",
            "password" => "tes",
            "role" => "KASIR"
        ],
        [
            "id" => 12,
            "username" => "aaa",
            "password" => "aaa",
            "role" => "PEMBELI"
        ],
        [
            "id" => 13,
            "username" => "bbb",
            "password" => "bbb",
            "role" => "KASIR"
        ],
        [
            "id" => 14,
            "username" => "abcd",
            "password" => "abcd",
            "role" => "PEMBELI"
        ],
        [
            "id" => 15,
            "username" => "user1234",
            "password" => "user1234",
            "role" => "KASIR"
        ],
        [
            "id" => 16,
            "username" => "demo",
            "password" => "demo",
            "role" => "PEMBELI"
        ]
    ];

    function dashboard()
    {
        $parsedData = [
            "data0" => MainController::$barang[0],
            "data1" => MainController::$barang[1],
            "data2" => MainController::$barang[2],
            "data3" => MainController::$barang[3]
        ];

        foreach ($parsedData as $indexData => $data) {
            $currentKategory = $data['kategori'];
            if (isset($currentKategory[0])) {
                $categories = $currentKategory;
                $stringKategori = [];
                foreach ($categories as $categorie) {
                    foreach (MainController::$kategori as $category) {
                        if ($category['id'] == $categorie) {
                            $stringKategori[] = $category['nama'];
                        }
                    }
                }
                $strKategori = "";
                for ($i = 0; $i < count($stringKategori); $i++) {
                    if ($i == count($stringKategori) - 1) {
                        $strKategori .= $stringKategori[$i];
                    } else {
                        $strKategori .= $stringKategori[$i] . ", ";
                    }
                }
                $parsedData[$indexData]['kategori'] = $strKategori;
            } else {
                foreach (MainController::$kategori as $category) {
                    if ($category['id'] == $currentKategory) {
                        $parsedData[$indexData]['kategori'] = $category['nama'];
                    }
                }
            }
        }

        return view("loginGuest", $parsedData);
    }
    function barangHandler()
    {
        $parsedData = [[]];

        foreach (MainController::$barang as $key => $value) {
            $parsedData['data'][$key] = $value;
        }

        foreach ($parsedData['data'] as $indexData => $data) {
            $currentKategory = $data['kategori'];
            if (isset($currentKategory[0])) {
                $categories = $currentKategory;
                $stringKategori = [];
                foreach ($categories as $categorie) {
                    foreach (MainController::$kategori as $category) {
                        if ($category['id'] == $categorie) {
                            $stringKategori[] = $category['nama'];
                        }
                    }
                }
                $strKategori = "";
                for ($i = 0; $i < count($stringKategori); $i++) {
                    if ($i == count($stringKategori) - 1) {
                        $strKategori .= $stringKategori[$i];
                    } else {
                        $strKategori .= $stringKategori[$i] . ", ";
                    }
                }
                $parsedData['data'][$indexData]['kategori'] = $strKategori;
            } else {
                foreach (MainController::$kategori as $category) {
                    if ($category['id'] == $currentKategory) {
                        $parsedData['data'][$indexData]['kategori'] = $category['nama'];
                    }
                }
            }
        }
        $parsedData['kategories'] = MainController::$kategori;
        $parsedData['merks'] = MainController::$merk;

        return view("guestBarang", $parsedData);
    }
    function aboutHandler()
    {
        return view("guestAbout", ["panjangData" => count(MainController::$barang)]);
    }
    function adminMasterUserHandler()
    {
        return view("adminMasterUser", ["users" => MainController::$users]);
    }
    function adminBarangHandler()
    {
        return view("adminBarang", ["users" => MainController::$barang, "kategori" => MainController::$kategori, "merk" => MainController::$merk]);
    }
    function adminKategoriHandler()
    {
        return view("adminKategori", ["users" => MainController::$kategori]);
    }
    function adminMerkHandler()
    {
        return view("adminMerk", ["users" => MainController::$merk]);
    }
}
