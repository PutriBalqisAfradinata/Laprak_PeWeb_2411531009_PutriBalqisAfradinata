<?php

use Illuminate\Support\Facades\Route;

Route::get('/helo', function () {
    return "Hello World";
});

use App\Http\Controllers\UserController;
use App\Http\Controllers\MahasiswaController;

Route::get('/user', [UserController::class, 'index']);

// Routing Dasar
Route::get('/', function () {
    return 'Selamat Datang di Laravel';
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Routing Parameter
Route::get('/produk/{id}', function ($id) {
    return 'Produk ID: ' . $id;
});

// Named Route
Route::get('/dashboard', function () {
    return 'Halaman Dashboard';
})->name('dashboard');

// Route Group
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });
    Route::get('/products', function () {
        return 'Data Products';
    });
});

