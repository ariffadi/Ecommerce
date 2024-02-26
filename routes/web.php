<?php

use App\Http\Controllers\detailProdukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AdminController;
use Illuminate\Auth\Events\Login;

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


Route::domain(config('filament.domain'));

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/logout', [LoginController::class, 'logout']);
Route::post('/login/form', [LoginController::class, 'login']);
Route::post('/login/create', [LoginController::class, 'create']);
Route::get('/login/register', [LoginController::class, 'register']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/home', function () {
    return redirect('/')->with('success');
});


//auth
Route::middleware(['auth'])->group(function () {
    Route::get('/produk/{id}', [detailProdukController::class, 'index'])->name('produk.index');
});
