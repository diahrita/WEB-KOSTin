<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PemilikController;
use App\Http\Controllers\Backend\DataKostController;
use App\Http\Controllers\Backend\KostController;
use App\Http\Controllers\Backend\BookingController;
use App\Models\Pemilik;

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

Route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect']);

//ROUTE USER
Route::prefix('users')->group(function () {
    Route::get('/view', [UserController::class, 'UserView'])->name('user.view');
});

Route::get('/admin_dashboard', [PemilikController::class, 'AdminDashboard']);

Route::prefix('pemiliks')->group(function () {
    Route::get('/view', [PemilikController::class, 'PemilikView'])->name('pemilik.view');
    Route::get('/add', [PemilikController::class, 'PemilikAdd'])->name('pemilik.add');
    Route::post('/baru', [PemilikController::class, 'PemilikBaru'])->name('pemilik.baru');
    Route::get('/edit/{id}', [PemilikController::class, 'PemilikEdit'])->name('pemilik.edit');
    Route::post('/update/{id}', [PemilikController::class, 'PemilikUpdate'])->name('pemilik.update');
    Route::get('/delete/{id}', [PemilikController::class, 'PemilikDelete'])->name('pemilik.delete');
});

Route::prefix('data_kost')->group(function () {
    Route::get('/view', [KostController::class, 'KostView'])->name('kost.view');
    Route::get('/add', [KostController::class, 'KostAdd'])->name('kost.add');
    Route::post('/baru', [KostController::class, 'KostBaru'])->name('kost.baru');
    Route::get('/edit/{id}', [KostController::class, 'KostEdit'])->name('kost.edit');
    Route::post('/update/{id}', [KostController::class, 'KostUpdate'])->name('kost.update');
    Route::get('/delete/{id}', [KostController::class, 'KostDelete'])->name('kost.delete');
});

Route::prefix('kost')->group(function () {
    Route::get('/view', [DataKostController::class, 'DataKostView'])->name('data_kost.view');
    Route::get('/add', [DataKostController::class, 'DataKostAdd'])->name('data_kost.add');
    Route::post('/baru', [DataKostController::class, 'DataKostBaru'])->name('data_kost.baru');
    Route::get('/edit/{id}', [DataKostController::class, 'DataKostEdit'])->name('data_kost.edit');
    Route::post('/update/{id}', [DataKostController::class, 'DataKostUpdate'])->name('data_kost.update');
    Route::get('/delete/{id}', [DataKostController::class, 'DataKostDelete'])->name('data_kost.delete');
    Route::get('/detail/{id}', [DataKostController::class, 'DataKostDetail'])->name('data_kost.detail');
});

Route::prefix('booking')->group(function () {
    Route::get('/view', [BookingController::class, 'BookingView'])->name('booking.view');
});

Route::get('/data_kost_detail/{id}', [HomeController::class, 'DataKostDetail']);

Route::post('/add_cart/{id}', [HomeController::class, 'CartAdd']);

Route::get('/view_cart', [HomeController::class, 'CartView']);

Route::get('/remove_cart/{id}', [HomeController::class, 'CartRemove']);

Route::get('/booking', [HomeController::class, 'KostBooking']);


// Route::get('/view_kost', [DataKostController::class, 'DataKostView']);
// Route::post('/add_kost', [DataKostController::class, 'DataKostAdd']);
