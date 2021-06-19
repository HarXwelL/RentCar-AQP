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
    return view('index');
});
Route::get('/autos', function () {
    return view('autos');
});
Route::get('/autos/alquiler', function () {
    return view('alquiler');
});
Route::get('/autoalquiler', function () {
    return view('autoalquiler');
});
Route::get('/administrador/reportes', function () {
    return view('reportes');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
