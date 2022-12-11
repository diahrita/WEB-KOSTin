<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PemilikController;


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

Route::prefix('pemiliks')->group(function () {
    Route::get('/view', [PemilikController::class, 'PemilikView'])->name('pemilik.view');
    Route::get('/add', [PemilikController::class, 'PemilikAdd'])->name('pemilik.add');
    Route::post('/baru', [PemilikController::class, 'PemilikBaru'])->name('pemilik.baru');
    Route::get('/edit/{id}', [PemilikController::class, 'PemilikEdit'])->name('pemilik.edit');
    Route::post('/update/{id}', [PemilikController::class, 'PemilikUpdate'])->name('pemilik.update');
    Route::get('/delete/{id}', [PemilikController::class, 'PemilikDelete'])->name('pemilik.delete');
});
