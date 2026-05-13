<?php

use Illuminate\Support\Facades\Route;

Route::get('/helo', function () {
    return "Hello World";
});

use App\Http\Controllers\UserController;

Route::get('/user', [UserController::class, 'index']);

// Routing Dasar
Route::get('/', function () {
    return 'Selamat Datang di Laravel';
});

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