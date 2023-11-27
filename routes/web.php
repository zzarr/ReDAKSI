<?php

use App\Http\Controllers\add;
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

Route::get('/', function () {
    return view('login');
})->name('login');



Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin/dashboard');
    })->name('dashboard');

    Route::get('/add_account', [add::class, 'create'])->name('add_account');
    Route::post('/add_account', [add::class, 'addData'])->name('add_data');

    Route::get('/add_folder', function () {
        return view('admin/add_folder');
    })->name('add_folder');

    Route::get('/arsip', function () {
        return view('admin/arsip');
    })->name('arsip');
    Route::get('/list', function () {
        return view('admin.list_arsip');
    })->name('list');
});

Route::prefix('user')->group(function () {
});
