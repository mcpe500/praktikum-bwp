<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class MailController extends Controller
{
    function loginPage()
    {
        return view('mail.login');
    }
    function registerPage()
    {
        return view('mail.register');
    }
    function registerHandler(Request $req)
    {
        $data = $req->all();
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        $phone = $data['phone'];
        $users = [];
        if (Session::has('users')) {
            $users = Session::get('users');
        }
        $users[] = [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'phone' => $phone
        ];
        Session::put('users', $users);

        return view('mail.login');
    }
    function loginHandler(Request $req)
    {
        $data = $req->all();
        $email = $data['email'];
        $password = $data['password'];

        $users = [];
        if (Session::has('users')) {
            $users = Session::get('users');
        }
        $successfulLogin = false;
        $currentMailLogin = [];
        foreach ($users as $value) {
            if ($value['email'] == $email && $value['password'] == $password) {
                $successfulLogin = true;
                $currentMailLogin = $value;
            }
        }

        if ($successfulLogin) {
            Session::put('currentMailLogin', $currentMailLogin);
            return redirect()->route('go-to-mail-home');
        } else {
            return view('mail.login');
        }
    }
    function homePage(Request $req)
    {
        if (Session::has('currentMailLogin')) {
            return view('mail.mail_home');
        } else {
            return view('mail.login');
        }
    }
}
