<?php

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




Route::prefix('admin')->group(function(){
    Route::get('/', function () {
        return view('admin/dashboard');
    })->name('dashboard');

    Route::get('/add_account', function () {
        return view('admin/add_account');
    })->name('add_account');

    Route::get('/add_folder', function () {
        return view('admin/add_folder');
    })->name('add_folder');

    Route::get('/arsip', function () {
        return view('admin/arsip');
    })->name('arsip');
});

Route::prefix('user')->group(function(){
    
});


