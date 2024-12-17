<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\AboutControl;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Halaman Utama dan About
Route::get('/about/valin', [AboutControl::class, 'valin'])->name('about.valin');
Route::get('/about/rell', [AboutControl::class, 'rell'])->name('about.rell');
Route::get('/about/fiq', [AboutControl::class, 'fiq'])->name('about.fiq');

// Rute Berita
Route::resource('beritas', BeritaController::class);
Route::get('berita/Tambah_Berita', [BeritaController::class, 'create']);
Route::get('berita/joko', [BeritaController::class, 'joko'])->name('berita.joko');
Route::get('berita/pbwo', [BeritaController::class, 'pbwo'])->name('berita.pbwo');
Route::get('berita/bla', [BeritaController::class, 'bla'])->name('berita.bla');
Route::get('berita/blo', [BeritaController::class, 'blo'])->name('berita.blo');

// Halaman Landing

// Rute Autentikasi
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute Profil
Route::resource('profiles', ProfileController::class);

// Rute Admin (Dilindungi oleh Middleware 'auth')
Route::middleware('auth')->group(function () {
    Route::get('/admin/sidebar', function () {
        return view('ketua.admin');
    })->name('ketua.admin');

    // Admin Routes
    Route::get('/about', function () { return view('admin.about'); })->name('admin.about');
    // Route::get('/beritas', function () { return view('admin.berita'); })->name('admin.berita');
    Route::get('/user', function () { return view('admin.user'); })->name('admin.user');
    Route::get('/CRUD', function () { return view('admin.CRUD'); })->name('admin.CRUD');

    // Manajemen Pengguna
    Route::get('/user', [UserController::class, 'index'])->name('admin.user');
    Route::get('/user/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('/user', [UserController::class, 'store'])->name('admin.user.store');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::put('/user/{user}', [UserController::class, 'update'])->name('admin.user.update');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('admin.user.destroy');
});

// Rute untuk Halaman Show Berita
Route::get('/show/{id}', [BeritaController::class, 'show'])->name('show');
Route::get('/', [BeritaController::class, 'landing'])->name('landing');
Route::get('/beritas/{id}', [BeritaController::class, 'landing'])->name('landing.show');

