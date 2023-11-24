<?php

use App\Http\Controllers\BilliardController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, "main"])->name('main');

Route::prefix('mail')->group(function () {
    Route::get('login', [MailController::class, "loginPage"])->name('go-to-mail-login');
    Route::get('register', [MailController::class, "registerPage"])->name('go-to-mail-register');
    Route::post('login', [MailController::class, "loginHandler"])->name('go-to-mail-login-handler');
    Route::post('register', [MailController::class, "registerHandler"])->name('go-to-mail-register-handler');
    Route::get('home', [MailController::class, "homePage"])->name('go-to-mail-home');
});


Route::prefix('billiard')->group(function () {
    Route::get('login', [BilliardController::class, "loginPage"])->name('go-to-billiard-login');
    Route::get('register', [BilliardController::class, "registerPage"])->name('go-to-billiard-register');
    Route::post('login', [BilliardController::class, "loginHandler"])->name('go-to-billiard-login-handler');
    Route::post('register', [BilliardController::class, "registerHandler"])->name('go-to-billiard-register-handler');
    Route::get('home', [BilliardController::class, "homePage"])->name('go-to-billiard-home');
    Route::post('home', [BilliardController::class, "tableHandler"])->name('billiard-table-handler');
});
