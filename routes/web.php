<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutcontrol;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\loginregister;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
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


Route::get(uri:'/', action: [LandingController::class, 'index'])->name('index');
Route::get('/about/valin', [aboutcontrol::class, 'valin'])->name('about.valin');
Route::get('/about/rell', [aboutcontrol::class, 'rell'])->name('about.rell');
Route::get('/about/fiq', [aboutcontrol::class, 'fiq'])->name('about.fiq');

Route::resource('beritas', BeritaController::class);
Route::get('berita/Tambah_Berita', [BeritaController::class, 'Tambah_Berita'])->name('berita.Tambah_Berita');
Route::get('berita/joko', [BeritaController::class, 'joko'])->name('berita.joko');
Route::get('berita/pbwo', [BeritaController::class, 'pbwo'])->name('berita.pbwo');
Route::get('berita/bla', [BeritaController::class, 'bla'])->name('berita.bla');
Route::get('berita/blo', [BeritaController::class, 'blo'])->name('berita.blo');

Route::get('/login', function () {
    return view('loginreg.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::resource('profiles', ProfileController::class);


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/about', function () { return view('admin.about'); })->name('admin.about');
    Route::get('/berita', function () { return view('admin.berita'); })->name('admin.berita');
    Route::get('/user', function () { return view('admin.user'); })->name('admin.user');
});

