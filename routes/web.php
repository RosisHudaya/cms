<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
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
// PRAKTIKUM 1

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     echo "Nama  : Rosis Hudaya <br>";
//     echo "NIM   : 2041720053 <br>";
//     echo "Kelas : TI 2G";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Ini adalah halaman Artikel dengan ID : ". $id;
// });

// PRAKTIKUM 2
// Route::get('/', [PageController::class, 'index']);
// Route::get('/', [PageController::class, 'about']);
// Route::get('/', [PageController::class, 'articles']);

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// PRAKTIKUM 3
// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::prefix('category') -> group(function () {
//     Route::get("/marbel-edu-games", function () {
//         echo "Halaman Marbel Edu Games";
//     });
//     Route::get("/marbel-and-friends-kids-games", function () {
//         echo "Halaman Marbel and Friends Kids Games";
//     });
//     Route::get("/riri-story-books", function () {
//         echo "Halaman Riri Stroy Books";
//     });
//     Route::get("/kolak-kids-songs", function () {
//         echo "Halaman Kolak Kids Songs";
//     });
// });

// Route::prefix('news') -> group(function () {
//     Route::get("", function () {
//         echo "Halaman NEWS";
//     });
//     Route::get("/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19", function () {
//         echo "Halaman Studio Berbagi Untuk Warga Sekitar Terdampak COVID-19";
//     });
// });

// Route::prefix('program') -> group(function () {
//     Route::get("/karir" , function () {
//         echo "Halamn Karir";
//     });
//     Route::get("/magang" , function () {
//         echo "Halaman Magang";
//     });
//     Route::get("/kunjungan-industri" , function () {
//         echo "Halaman Kunjungan Industri";
//     });
// });

// Route::get("/about-us" , function () {
//     echo "SEJARAH KAMI";
// });
// Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', function(){
//     return view('home');
// });

// Route::get('/catalogs', function(){
//     return view('catalog');
// });

// Route::get('/our-team', function(){
//     return view('team');
// });

// Route::get('/contact-us', function(){
//     return view('contact');
// });

// Route::get('/', 'HomeController@index');

// PRAKTIKUM 6
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('articles', ArticleController::class);