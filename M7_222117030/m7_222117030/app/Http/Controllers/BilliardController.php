<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BilliardController extends Controller
{
    function loginPage()
    {
        return view('billiard.login');
    }
    function registerPage()
    {
        return view('billiard.register');
    }
    function registerHandler(Request $req)
    {
        $data = $req->all();
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        $phone = $data['phone'];
        if (isset($data['setuju'])) {
            $setuju = $data['setuju'];
            $users = [];
            if (Session::has('billiard-users')) {
                $users = Session::get('billiard-users');
            }
            $users[] = [
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'phone' => $phone
            ];
            Session::put('billiard-users', $users);

            return view('billiard.login');
        } else {
            return view('billiard.register');
        }
    }
    function loginHandler(Request $req)
    {
        $data = $req->all();
        $email = $data['email'];
        $password = $data['password'];

        $users = [];
        if (Session::has('billiard-users')) {
            $users = Session::get('billiard-users');
        }
        $successfulLogin = false;
        $currentMailLogin = [];
        foreach ($users as $value) {
            if ($value['email'] == $email && $value['password'] == $password) {
                $successfulLogin = true;
                $currentMailLogin = $value;
            }
        }
        $meja = [
            [
                "nama" => "Meja 1",
                "time" => 0,
                "kosong" => true
            ],
            [
                "nama" => "Meja 2",
                "time" => 60,
                "kosong" => false
            ],
            [
                "nama" => "Meja 3",
                "time" => 0,
                "kosong" => true
            ],
            [
                "nama" => "Meja 4",
                "time" => 0,
                "kosong" => true
            ],
            [
                "nama" => "Meja 5",
                "time" => 0,
                "kosong" => true
            ],
            [
                "nama" => "Meja 6",
                "time" => 0,
                "kosong" => true
            ]
        ];
        if (Session::has('billiard-meja')) {
            $meja = Session::get('billiard-meja');
        }

        if ($successfulLogin) {
            Session::put('currentBilliardLogin', $currentMailLogin);
            Session::put('billiard-meja', $meja);
            return redirect()->route('go-to-billiard-home');
        } else {
            return view('billiard.login');
        }
    }
    function homePage(Request $req)
    {
        if (Session::has('currentBilliardLogin')) {
            return view('billiard.home');
        } else {
            return view('billiard.login');
        }
    }
    function tableHandler(Request $req)
    {
        $data = $req->all();
        $email = $data['email'];
        $password = $data['password'];

        $users = [];
        if (Session::has('billiard-users')) {
            $users = Session::get('billiard-users');
        }
        $successfulLogin = false;
        $currentMailLogin = [];
        foreach ($users as $value) {
            if ($value['email'] == $email && $value['password'] == $password) {
                $successfulLogin = true;
                $currentMailLogin = $value;
            }
        }
        $meja = [
            [
                "nama" => "Meja 1",
                "time" => 0,
                "kosong" => true
            ],
            [
                "nama" => "Meja 2",
                "time" => 60,
                "kosong" => false
            ],
            [
                "nama" => "Meja 3",
                "time" => 0,
                "kosong" => true
            ],
            [
                "nama" => "Meja 4",
                "time" => 0,
                "kosong" => true
            ],
            [
                "nama" => "Meja 5",
                "time" => 0,
                "kosong" => true
            ],
            [
                "nama" => "Meja 6",
                "time" => 0,
                "kosong" => true
            ]
        ];
        if (Session::has('billiard-meja')) {
            $meja = Session::get('billiard-meja');
        }

        if ($successfulLogin) {
            Session::put('currentBilliardLogin', $currentMailLogin);
            Session::put('billiard-meja', $meja);
            return redirect()->route('go-to-billiard-home');
        } else {
            return view('billiard.login');
        }
    }
}
