
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\admin\KategoriArtikelController;
use App\Http\Controllers\Admin\ArtikelController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/profil', [ProfilController::class, 'index'])
    ->name('profil');

Route::get('/artikel', function () {
    return view('pages.artikel');
})->name('artikel');

Route::get('/admin', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::resource('kategori', KategoriArtikelController::class)
    ->names('kategori');

Route::resource('admin/artikel', ArtikelController::class)
    ->names('artikel');