<?php

use App\Http\Controllers\add_accountController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [loginController::class, 'login'])->name('login');
Route::post('/', [loginController::class, 'getData_login'])->name('login');

/*Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/login', [loginController::class, 'login'])->name('login');
    Route::post('/login', [loginController::class, 'getData_login'])->name('login');
});*/

Route::get('/add_account', [add_accountController::class, 'create'])->name('add_account');
Route::post('/add_account', [add_accountController::class, 'addData'])->name('add_account');

Route::prefix('admin')->group(function () {
    Route::get('/', [ArsipController::class, 'index'])->name('dashboard');

    Route::get('/add_folder', function () {
        return view('admin/add_folder');
    })->name('add_folder');

    Route::get('/arsip', [ArsipController::class, 'show'])->name('arsip');
    Route::get('/list', function () {
        return view('admin.list_arsip');
    })->name('list');
});

Route::prefix('user')->group(function () {
    Route::get('/', function () {
        return view('user.dashboard');
    });
});
