<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HeaderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProduckController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('home', [FrontendController::class, 'index']);

Route::get('admin', function () {
    return view('index2');
});
Route::get('account-admin', [AdminController::class, 'index']);
Route::get('produk', [ProduckController::class, 'index']);
Route::get('products/create', [ProduckController::class, 'create'])->name('products.create');
Route::post('/products', [ProduckController::class, 'store'])->name('products.store');

Route::get('/template-header', [HeaderController::class, 'index'])->name('header.index');
Route::get('template-header-create', [HeaderController::class, 'create']);
Route::post('/header', [HeaderController::class, 'store'])->name('header.store');
Route::delete('/header/{header}', [HeaderController::class, 'destroy'])->name('header.delete');

Route::delete('/users/{user}', [AdminController::class, 'destroy'])->name('users.destroy');

// Menampilkan form login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('actionlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('actionlogout');
Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');

