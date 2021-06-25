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
    return view('clientes.index');  
});
Route::get('/administrador', function () {
    return view('administrador.index');
});
Route::get('/administrador/configuracion', function () {
    return view('administrador.config');
});
Route::get('/autos', function () {
    return view('clientes.autos');
});
Route::get('/autos/alquiler', function () {
    return view('clientes.alquiler');
});
Route::get('/autoalquiler', function () {
    return view('clientes.autoalquiler');
});
Route::get('/administrador/reportes', function () {
    return view('clientes.reportes');
});
Route::get('/admin/rental', function () {
    return view('administrador.Rental');
});
Route::get('/admin/users', function () {
    return view('administrador.Users');
});
Route::get('/admin/auto', function () {
    return view('administrador.auto');
});
Route::get('/admin/review', function () {
    return view('administrador.review');
});
Route::get('/admin/provider', function () {
    return view('administrador.provider');
});
Route::get('/admin/offers', function () {
    return view('administrador.offers');
});

Route::resource('Rental','App\Http\Controllers\RentalController');
Route::resource('User','App\Http\Controllers\UserController');
Route::resource('auto','App\Http\Controllers\AutoController');
Route::resource('review','App\Http\Controllers\ReviewsController');
Route::resource('provider','App\Http\Controllers\ProdviderController');
Route::resource('offers','App\Http\Controllers\OffersController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
