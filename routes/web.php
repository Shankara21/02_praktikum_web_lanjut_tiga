<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProgramController;
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

// Menampilkan halaman awal website
Route::get('/', [HomeController::class, 'index']);

// Menampilkan daftar products (route prefix)
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [ProductsController::class, 'index']);
    Route::get('/marbel-and-friend-kids-games', [ProductsController::class, 'kids']);
    Route::get('/riri-story-books', [ProductsController::class, 'story']);
    Route::get('/kolak-kids-songs', [ProductsController::class, 'sings']);
});

// Menampilkan daftar berita  (route param)
Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{topic}', [NewsController::class, 'news']);

// Menampilkan daftar program (route prefix)
Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjungan']);
});

// Menampilkan about us (route biasa)
Route::get('/about', function () {
    return redirect('https://www.educastudio.com/about-us');
});

// Menampilkan contact us (route resource)
Route::resource('/contact', ContactController::class)->only(['index']);
