<?php


use App\Http\Controllers\ArsipController;
use App\Http\Controllers\accountController;
use App\Http\Controllers\DashboardControler;
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


Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardControler::class, 'index'])->name('dashboard');

    Route::get('/account', [accountController::class, 'index'])->name('account');
    Route::get('/add_account', [accountController::class, 'create'])->name('add_account');
    Route::post('/add_account', [accountController::class, 'addData'])->name('add_account');

    Route::get('/folder', [ArsipController::class, 'index'])->name('folder');
    Route::get('/add_folder', [ArsipController::class, 'add_arsip'])->name('add_folder');
});

Route::prefix('user')->group(function () {
    Route::get('/', function () {
        return view('user.dashboard');
    });
});
