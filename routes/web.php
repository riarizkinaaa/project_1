<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/data_anak', function () {
    return view('pendata.data_anak');
});
// Route::get('/data_anak', function () {
//     return view('pendata.data_anak');
// });
Route::get('/form_anak', function () {
    return view('pendata.form_anak');
});
Route::get('/form_pendidikan', function () {
    return view('pendata.form_pendidikan');
});
Route::get('/dusun', function () {
    return view('pendata.form_dusun');
});
Route::get('/profil_pendata', function () {
    return view('pendata.profil');
});

