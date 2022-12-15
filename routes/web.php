<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Middleware\AcessLog;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\Login;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProvidersController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [SiteController::class, 'index'])->name('site.index')->middleware(AcessLog::class);
Route::get('/about', [AboutController::class, 'index'])->name('site.about');
Route::get('/contact', [ContactController::class, 'index'])->name('site.contact');
Route::post('/contact', [ContactController::class, 'saveContact'])->name('site.contact');
Route::get('/login/{error?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'signIn'])->name('site.login');

Route::middleware(Login::class)->prefix('/app')->group(function () {
    Route::get('/customers', [CustomersController::class, 'index'])->name('app.customers');
    Route::get('/providers', [ProvidersController::class, 'index'])->name('app.providers');
    Route::get('/products', [ProductsController::class, 'index'])->name('app.products');
    Route::get('/home', [HomeController::class, 'index'])->name('app.home');
    Route::get('/sign-out', [LoginController::class, 'signOut'])->name('app.signOut');
});