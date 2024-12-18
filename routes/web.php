<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('product.index');
// });
// route::resource('product', ProductController::class);


Route::get('/', [ProductController::class, 'index']);
Route::resource('product', ProductController::class);

Route::get('/login', [AuthController::class. 'login'])->name('login');
Route::post('/login', [AuthController::class. 'authenticate'])->name('auth.authenticate');

Route::get('/register', [AuthController::class. 'register'])->name('register');
Route::post('/register', [AuthController::class. 'store'])->name('auth.store');

Route::post('/logout', [AuthController::class. 'logout'])->name('auth.logout');
// // Route untuk Dosen
// // Route::prefix('dosen')->name('dosen.')->group(function () {
//     Route::get('product', [ProductController::class, 'index'])->name('product.index');
//     Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
//     Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
//     // Route::get('/{dosen}', [ProductController::class, 'show'])->name('product.show');
//     // Route::get('/{dosen}/edit', [ProductController::class, 'getEditForm'])->name('product.edit');
//     // Route::put('/{dosen}', [ProductController::class, 'update'])->name('product.update');
//     // Route::delete('/{dosen}', [ProductController::class, 'destroy'])->name('product.destroy');
// // });
// // Route untuk Mahasiswa
// // // Route::prefix('mahasiswa')->name('mahasiswa.')->group(function () {
// //     Route::get('/', [ProductController::class, 'index'])->name('index');
// //     Route::get('/create', [MahasiswaController::class, 'getCreateForm'])->name('create');
// //     Route::post('/', [ProductController::class, 'store'])->name('store');
// //     Route::get('/{mahasiswa}', [MahasiswaController::class, 'show'])->name('show');
// //     Route::get('/{mahasiswa}/edit', [MahasiswaController::class, 'getEditForm'])->name('edit');
// //     Route::put('/{mahasiswa}', [MahasiswaController::class, 'update'])->name('update');
// //     Route::delete('/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('destroy');
// // // });