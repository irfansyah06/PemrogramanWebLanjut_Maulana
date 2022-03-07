<?php

use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ArticleController;
// use App\Http\Controllers\AboutUsController;
// use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
// use App\Http\Controllers\PhotoController;
// use App\Http\Controllers\HomeCompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
// use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;

use Illuminate\Support\Facades\Auth;
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
// Route::get('/', [HomeCompanyController::class, 'index']);

// Nomor 2:
// Route::prefix('category')->group(function () {
//     Route::get('/marbel-edu-games', [CategoryController::class, 'edugames']);
//     Route::get('/marbel-and-friends-kids-games', [CategoryController::class, 'kidsgame']);
//     Route::get('/riri-story-books', [CategoryController::class, 'storybooks']);
//     Route::get('/kolak-kids-songs', [CategoryController::class, 'kidsongs']);
// });

// Nomor 3:
// Route::get('/news', [NewsController::class, 'index'])->name('news.index');
// Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

// Nomor 4:
// Route::prefix('program')->group(function () {
//     Route::get('/karir', [ProgramController::class, 'karir']);
//     Route::get('/magang', [ProgramController::class, 'magang']);
//     Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
// });

// Nomor 5:
// Route::get('/about-us', [AboutUsController::class, 'index'])->name('aboutus.index');


// Tambahan
// Route::resource('contact', ContactController::class);
// Route::resource('photos', PhotoController::class);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



/***  PRAKTIKUM 3_View - 07 March 2022 ***/
Auth::routes();

Route::get('/', [WelcomeController::class, 'index'])->name('indexPage');
Route::get('home', [HomeController::class, 'index'])->name('home');

Route::prefix('category')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('category');
    Route::get('marbel-edu-games', [ProductController::class, 'eduGames'])->name('eduGames');
    Route::get('marbel-and-friends-kids-games', [ProductController::class, 'kidsGames'])->name('kidsGames');
    Route::get('riri-story-books', [ProductController::class, 'storyBooks'])->name('storyBooks');
    Route::get('kolak-kids-songs', [ProductController::class, 'kidsSongs'])->name('kidsSongs');
});

Route::get('news/{slug?}', [NewsController::class, 'show'])->name('news');

Route::prefix('program')->group(function () {
    Route::get('/', [ProgramController::class, 'index'])->name('program');
    Route::get('karir', [ProgramController::class, 'karir'])->name('karir');
    Route::get('magang', [ProgramController::class, 'magang'])->name('magang');
    Route::get('kunjungan-industri', [ProgramController::class, 'kunjungan'])->name('kunjungan');
});

Route::get('about-us', [AboutController::class, 'about'])->name('about-us');

Route::resource('contact-us', ContactController::class)->only('index', 'store');