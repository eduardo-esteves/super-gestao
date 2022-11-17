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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('site.index');
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('site.about');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('site.contact');
Route::get('/login', function () { return 'Login'; })->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clients', function () { return 'Clients'; })->name('app.clients');
    Route::get('/providers', function () { return 'Providers'; })->name('app.providers');
    Route::get('/products', function () { return 'Products'; })->name('app.products');
});