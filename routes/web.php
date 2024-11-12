<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutcontrol;
use App\Http\Controllers\BeritaController;


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

Route::get('berita/joko', [BeritaController::class, 'joko'])->name('berita.joko');
Route::get('berita/pbwo', [BeritaController::class, 'pbwo'])->name('berita.pbwo');
Route::get('berita/bla', [BeritaController::class, 'bla'])->name('berita.bla');
Route::get('berita/blo', [BeritaController::class, 'blo'])->name('berita.blo');
