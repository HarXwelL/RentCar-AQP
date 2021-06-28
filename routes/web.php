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
Route::get('/Rental/create', function () {
    return view('create.createrental');
});
Route::get('/auto/create', function () {
    return view('create.createauto');
});
Route::get('/offers/create', function () {
    return view('create.createoffers');
});
Route::get('/provider/create', function () {
    return view('create.createprovider');
});
Route::get('/review/create', function () {
    return view('create.createreview');
});
Route::get('/Users/create', function () {
    return view('create.createusers');
});
Route::get('/Rental/edit', function () {
    return view('edit.editrental');
});
Route::get('/auto/edit', function () {
    return view('edit.editauto');
});
Route::get('/Offers/edit', function () {
    return view('edit.editoffers');
});
Route::get('/provider/edit', function () {
    return view('edit.editprovider');
});
Route::get('/review/edit', function () {
    return view('edit.editreview');
});
Route::get('/Users/edit', function () {
    return view('edit.editusers');
});
Route::resource('AutoCli',AutoCliController::class);
Route::resource('home',AutoController::class);
Route::resource('Rental',RentalController::class);
Route::resource('auto',AutoController::class);
Route::resource('Offers',OffersController::class);
Route::resource('provider',ProviderController::class);
Route::resource('review',ReviewsController::class);
Route::resource('Users',UserController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
