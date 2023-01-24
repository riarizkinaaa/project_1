<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\DesaController;
// use App\Http\Controllers\AnakController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AnakYController;
use App\Http\Controllers\DusunController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\PekerjaanOrtuCotroller;

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

// Route::get('/', function () {
//     return view('layout.template');
// });
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/dash', function () {
    return view('superUser.dash_user');
});
Route::get('/dash_pendata', function () {
    return view('pendata.dash_pendata');
});
Route::get('/dash_pendata', function () {
    return view('pendata.dash_pendata');
});
Route::get('/dataA', function () {
    return view('pendata.dataA');
});

Route::resource('/anak',AnakController::class);
Route::resource('/kecamatan',KecamatanController::class);
Route::resource('/desa',DesaController::class);
Route::resource('/dusun',DusunController::class);
Route::resource('/kelas',KelasController::class);
Route::resource('/pekerja',PekerjaanOrtuCotroller::class);
Route::resource('/login',LoginController::class);
Route::resource('/dataY',AnakController::class);
