<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\QuestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DaruratController;


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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/layouts/mainlayout', function () {
    return view('layouts/mainlayout');
});

//tes

Route::resource('/quest', QuestController::class);
Route::resource('/laporan', LaporanController::class);

Route::get('/login', [UserController::class, 'login'])->name('login')
    ->middleware('guest');
Route::post('/login', [UserController::class, 'authenticate'])
    ->middleware('guest');

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout'])
    ->middleware('auth');
    
Route::get('/profile', [UserController::class, 'profile'])
    ->middleware('auth');


Route::get('/darurat', [DaruratController::class, 'index']);
Route::get('/darurat/polisi', [DaruratController::class, 'polisi']);
Route::get('/darurat/igd', [DaruratController::class, 'igd']);
Route::get('/darurat/damkar', [DaruratController::class, 'damkar']);
