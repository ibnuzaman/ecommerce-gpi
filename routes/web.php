<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', function () {
//     return view('index');
// })->name('index');


Route::get('/produk', function () {
    return view('gpi/produk');
})->name('produk');

Route::get('/transaksi', function () {
    return view('gpi/transaksi');
})->name('transaksi');

Route::get('/detail-produk', function () {
    return view('gpi/detail-produk');
})->name('detail-produk');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'customerMiddleware'])->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
});
Route::middleware(['auth', 'adminMiddleware'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});
