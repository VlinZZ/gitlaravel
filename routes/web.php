<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutcontrol;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\loginregister;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
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

Route::resource('abouts', AboutController::class);
Route::get('/abouts/{id}/edit', [AboutController::class, 'edit'])->name('abouts.edit');
Route::put('/abouts/{id}', [AboutController::class, 'update'])->name('abouts.update');
Route::get('/about/valin', [aboutcontrol::class, 'valin'])->name('about.valin');
Route::get('/about/rell', [aboutcontrol::class, 'rell'])->name('about.rell');
Route::get('/about/fiq', [aboutcontrol::class, 'fiq'])->name('about.fiq');

Route::resource('beritas', BeritaController::class);
Route::get('berita/Tambah_Berita', [BeritaController::class, 'Tambah_Berita'])->name('berita.Tambah_Berita');
Route::get('berita/joko', [BeritaController::class, 'joko'])->name('berita.joko');
Route::get('berita/pbwo', [BeritaController::class, 'pbwo'])->name('berita.pbwo');
Route::get('berita/bla', [BeritaController::class, 'bla'])->name('berita.bla');
Route::get('berita/blo', [BeritaController::class, 'blo'])->name('berita.blo');
Route::get('ketua/admin', [LandingController::class, 'admin'])->name('ketua.admin');

Route::get('/login', function () {
    return view('loginreg.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login');




    Route::get('/about', function () { return view('admin.about'); })->name('admin.about');
    Route::get('/berita', function () { return view('admin.berita'); })->name('admin.berita');
    Route::get('/user', function () { return view('admin.user'); })->name('admin.user');
    Route::get('/CRUD', function () { return view('admin.CRUD'); })->name('admin.CRUD');

Route::get('/user/first', [UserController::class, 'getFirstUser']);
Route::get('/user/{email}', [UserController::class, 'getUserByCondition']);





