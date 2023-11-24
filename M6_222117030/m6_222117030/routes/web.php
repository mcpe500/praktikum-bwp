<?php

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

Route::get('/', [MainController::class, "saham_teratas"])->name('dashboard');
Route::get('/list-saham', [MainController::class, "list_saham"])->name('listSaham');
Route::get('/saham-detail/{symbol}', [MainController::class, "saham_detail"]);
