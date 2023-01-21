<?php

use App\Http\Controllers\AnakController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('layout.template');
// });
Route::get('/', function () {
    return view('auth.login');
});
Route::resource('/login',LoginController::class);

Route::resource('/anak',AnakController::class);


// Route::get('/pendata', function () {
//     return view('pendata.data');
// });
// Route::get('/form', function () {
//     return view('pendata.form');
// });
// Route::get('/veri', function () {
//     return view('verifikator.dashboard');
// });
// Route::get('/form', function () {
//     return view('pendata.form_anak');
// });
// Route::get('/pimpinan', function () {
//     return view('pimpinan.dash');
// });
