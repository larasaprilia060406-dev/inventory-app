<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login',
    [AuthController::class, 'showLoginForm'])
    ->name('login');

Route::post('/login',
    [AuthController::class, 'login'])
    ->name('login.process');

Route::get('/logout',
    [AuthController::class, 'logout'])
    ->name('logout');


Route::middleware(['auth.custom'])->group(function () {

    Route::resource('categories', CategoryController::class);

    Route::resource('products', ProductController::class);
});

Route::get('/admin-area', function () {
    return "Selamat datang Admin";
})->middleware('role:admin');

Route::get('/user-area', function () {
    return "Selamat Datang User";
})->middleware('role:user');

Route::get('/dashboard', function () {
    return "Dashboard User";
})->middleware('auth.custom');

// Route::get('/products', [ProductController::class, 'index']);
Route::get('/insert', [ProductController::class, 'insert']);
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
//Route::get('/products/update/{id}', [ProductController::class, 'update']);//
Route::get('/products/delete/{id}', [ProductController::class, 'delete']);
// Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');