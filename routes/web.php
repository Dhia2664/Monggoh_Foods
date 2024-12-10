<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
// Rute Publik (Bisa diakses tanpa login)
|--------------------------------------------------------------------------*/

// Halaman utama (home/dashboard untuk semua pengguna)
Route::get('/', function () {
    return Auth::check() ? view('dashboard') : view('home'); // Jika sudah login, arahkan ke dashboard, jika tidak ke home
})->name('home');

Route::get('/menu', function () {
    return view('menu'); // Menampilkan daftar menu
})->name('menu');

// Rute untuk menampilkan cart (dapat diakses tanpa login jika sesuai kebutuhan)
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');

// Menambahkan item ke keranjang
Route::get('/cart/add/{productId}', [CartController::class, 'addToCart'])->name('cart.add');

// Menghapus item dari keranjang
Route::get('/cart/remove/{itemId}', [CartController::class, 'removeFromCart'])->name('cart.remove');

/*
|--------------------------------------------------------------------------
// Rute Autentikasi
|--------------------------------------------------------------------------*/

// Halaman login
Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

// Proses login
Route::post('login', [AuthenticatedSessionController::class, 'store']);

// Halaman registrasi
Route::get('register', [AuthenticatedSessionController::class, 'create'])->name('register');

// Proses registrasi (bisa diarahkan ke method baru di controller untuk register)
Route::post('register', [AuthenticatedSessionController::class, 'store']);

// Proses logout
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Rute tambahan dari Laravel Breeze (register, forgot password, dll.)
require __DIR__ . '/auth.php';

/*
|--------------------------------------------------------------------------
// Rute Terproteksi (Memerlukan Login)
|--------------------------------------------------------------------------*/
Route::middleware('auth')->group(function () {
    // Halaman dashboard khusus pengguna yang sudah login
    Route::get('/dashboard', function () {
        return view('dashboard'); // Dashboard untuk pengguna biasa
    })->name('dashboard');

    // Rute untuk pengelolaan profil pengguna
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
// Rute Khusus Admin
|--------------------------------------------------------------------------*/
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard admin
    Route::get('/admin/dashboard', function () {
        // Debugging untuk melihat role pengguna
        dd(Auth::user()->role); 
        
        // Jika pengguna adalah admin
        if (Auth::user()->role == 'admin') {
            return view('admin.dashboard');
        }
        return redirect()->route('home'); // Jika bukan admin, redirect ke halaman home
    })->name('admin.dashboard');
});
