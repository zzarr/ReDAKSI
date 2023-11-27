<?php

use App\Http\Controllers\user;
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

Route::get('/add_account', [user::class, 'create'])->name('add_account');
Route::post('/add_account', [user::class, 'add'])->name('route_name');

Route::get('/add_folder', function () {
    return view('add_folder');
})->name('add_folder');

Route::get('/arsip', function () {
    return view('arsip');
})->name('arsip');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
