<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\gaji;
use App\Http\Controllers\jabatan;
use App\Http\Controllers\presensi;




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

Route::get('/', [home::class, 'index']);

Route::get('/gaji', [gaji::class, 'index']);

Route::get('/jabatan', [jabatan::class, 'index']);

Route::get('/presensi', [presensi::class, 'index']);

