<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Controllers\AsteroidController::class,'index'])->name('asteroid.index');
Route::get('/neo/hazardous', [Controllers\AsteroidController::class,'ViewHazardous'])->name('asteroid.viewHazardous');
Route::get('/neo/fastest', [Controllers\AsteroidController::class,'ViewOderBySpeed'])->name('asteroid.orderBySpeed');
Route::get('/neo/asteroids/create', [Controllers\AsteroidController::class,'AddAsteroids'])->name('asteroid.add');
