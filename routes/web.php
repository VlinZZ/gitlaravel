<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

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
Route::get(uri:'/navbar', action: [LandingController::class, 'navbar'])->name('navbar');
Route::get(uri:'/berita', action: [LandingController::class, 'navbar'])->name('berita.index');
