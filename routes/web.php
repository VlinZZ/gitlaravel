<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use Illuminate\Routing\Route as RoutingRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| Routes are loaded by the RouteServiceProvider.
|
*/

// Halaman Utama dan About

// Route untuk menampilkan halaman edit
Route::resource('abouts', AboutController::class);
Route::get('/admin/about/{id}/edit', [AboutController::class, 'edit'])->name('admin.about.edit');
Route::put('/admin/about/{id}', [AboutController::class, 'update'])->name('admin.about.update');
Route::get('/about/valin', [AboutController::class, 'valin'])->name('about.valin');
Route::get('/about/rell', [AboutController::class, 'rell'])->name('about.rell');
Route::get('/about/fiq', [AboutController::class, 'fiq'])->name('about.fiq');

// Rute Berita
Route::resource('beritas', BeritaController::class);
// Route::get('berita/Tambah_Berita', [BeritaController::class, 'Tambah_Berita'])->name('berita.Tambah_Berita');
Route::get('berita/Tambah_Berita', [BeritaController::class, 'create']);
Route::get('berita/joko', [BeritaController::class, 'joko'])->name('berita.joko');
Route::get('berita/pbwo', [BeritaController::class, 'pbwo'])->name('berita.pbwo');
Route::get('berita/bla', [BeritaController::class, 'bla'])->name('berita.bla');
Route::get('berita/blo', [BeritaController::class, 'blo'])->name('berita.blo');
Route::get('ketua/admin', [LandingController::class, 'admin'])->name('ketua.admin');

// Rute Autentikasi
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute Profil
Route::resource('profiles', ProfileController::class);

// Rute Admin - Dilindungi oleh Middleware 'auth'
Route::middleware('auth')->group(function () {
    // Halaman Dashboard dan Admin
Route::post('berita/store', [BeritaController::class, 'store'])->name('berita.store');
Route::get('/berita', [BeritaController::class, 'index'])->name('beritas.index');

    Route::get('/admin/abouts', [AboutController::class, 'index'])->name('abouts.index');
    // Route::get('/berita', function () { return view('admin.berita'); })->name('admin.berita');
    Route::get('/user', function () { return view('admin.user'); })->name('admin.user');
    Route::get('/CRUD', function () { return view('admin.CRUD'); })->name('admin.CRUD');

    // Manajemen Pengguna
    Route::get('/user', [UserController::class, 'index'])->name('admin.user');
    Route::get('/user/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('/user', [UserController::class, 'store'])->name('admin.user.store');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::put('/user/{user}', [UserController::class, 'update'])->name('admin.user.update');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('admin.user.destroy');

    // Fungsionalitas Admin Tambahan
    Route::get('/user/first', [UserController::class, 'getFirstUser']);
    Route::get('/user/{email}', [UserController::class, 'getUserByCondition']);

    // **Hapus Route::resource('users', UserController::class) untuk menghindari duplikasi**
});
Route::get('/user/first', [UserController::class, 'getFirstUser']);
Route::get('/user/{email}', [UserController::class, 'getUserByCondition']);


Route::get('/show/{id}', [BeritaController::class, 'show'])->name('show');
Route::get('/', [BeritaController::class, 'landing'])->name('landing');
Route::get('/beritas/{id}', [BeritaController::class, 'landing'])->name('landing.show');

Route::get('/about', [aboutControl::class, 'index'])->name('admin.about');
