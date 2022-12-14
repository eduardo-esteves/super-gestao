<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Middleware\AcessLog;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\Login;

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

Route::get('/', [HomeController::class, 'index'])->name('site.index')->middleware(AcessLog::class);
Route::get('/about', [AboutController::class, 'index'])->name('site.about');
Route::get('/contact', [ContactController::class, 'index'])->name('site.contact');
Route::post('/contact', [ContactController::class, 'saveContact'])->name('site.contact');
Route::get('/login/{error?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'signIn'])->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clients', function () { return 'Clients'; })->name('app.clients');
    Route::get('/providers', function () { return 'Providers'; })->name('app.providers');
    Route::get('/products', function () { return 'Products'; })->name('app.products');
});