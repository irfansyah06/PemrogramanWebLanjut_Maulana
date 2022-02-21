<?php

// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\HomeCompanyController;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
// use App\Http\Controllers\PageController;
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
// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'articles']);

/***  PRAKTIKUM 2 SESI 2***/
// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'about']);

// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

/***  PRAKTIKUM 3 ***/

// Nomor 1:
Route::get('/', [HomeCompanyController::class, 'index']);

// Nomor 2:
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [CategoryController::class, 'edugames']);
    Route::get('/marbel-and-friends-kids-games', [CategoryController::class, 'kidsgame']);
    Route::get('/riri-story-books', [CategoryController::class, 'storybooks']);
    Route::get('/kolak-kids-songs', [CategoryController::class, 'kidsongs']);
});

// Nomor 3:
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

// Nomor 4:
Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
});

// Nomor 5:
Route::get('/about-us', [AboutUsController::class, 'index'])->name('aboutus.index');


// Tambahan
Route::resource('contact', ContactController::class);
Route::resource('photos', PhotoController::class);
