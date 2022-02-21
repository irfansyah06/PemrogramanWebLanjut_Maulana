<?php

use App\Http\Controllers\PageController;
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

/***  PRAKTIKUM 1 ***/

// Nomor 1:
// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Nomor 2:
// Route::get('/about', function () {
//     echo "NIM: 2041720132 <br>";
//     echo "Nama: Maulana Bintang Irfansyah <br>";
//     echo "Kelas: TI-2H";
// });

// Nomor3
// Route::get('/articles/{id}', function ($id) {
//     echo "Ini adalah halaman artikel dengan ID $id";
// });

/***  PRAKTIKUM 2 SESI 1***/
Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/articles/{id}', [PageController::class, 'articles']);




