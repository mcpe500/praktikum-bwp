<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Hello Ivan
Route::get('/', function () {
    return view('login');
});
Route::prefix('login')->group(function () {
    Route::get('/', function () {
        return view('login');
    })->name("login");

    Route::prefix('guest')->group(function () {
        Route::get('/', [MainController::class, "dashboard"])->name("guestLogin");

        Route::get('barang', [MainController::class, "barangHandler"])->name("guestBarang");

        Route::get('about', [MainController::class, "aboutHandler"])->name("guestAbout");
    });

    Route::get('adminLogin', [MainController::class, "adminMasterUserHandler"])->name("adminLogin");
    Route::get('adminBarang', [MainController::class, "adminBarangHandler"])->name("adminBarang");
    Route::get('adminKategori', [MainController::class, "adminKategoriHandler"])->name("adminKategori");
    Route::get('adminMerk', [MainController::class, "adminMerkHandler"])->name("adminMerk");
});
