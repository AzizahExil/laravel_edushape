<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('kategori', KategoriController::class);
Route::resource('artikel', ArtikelController::class);

Route::get('/edu-videos', function () {
    return view('edu-videos');
});

Route::get('/cover', function () {
    return view('cover');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/pre-school', function () {
    return view('pre-school');
});
Route::get('/elementary', function () {
    return view('elementary');
});
Route::get('/middle', function () {
    return view('middle');
});
Route::get('/high', function () {
    return view('high');
});