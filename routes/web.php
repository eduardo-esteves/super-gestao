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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/about', [\App\Http\Controllers\SobreNosController::class, 'index']);
Route::get('/contact', [\App\Http\Controllers\ContatoController::class, 'index']);

Route::get('/login', function(){ return 'Login';});
Route::get('/clients', function(){ return 'Clients';});
Route::get('/providers', function(){ return 'Providers';});
Route::get('/products', function(){ return 'Products';});
