<?php


use App\Http\Controllers\ArsipController;
use App\Http\Controllers\accountController;
use App\Http\Controllers\DashboardControler;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\StandarController;
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

    Route::resource('jabatan', JabatanController::class);

    Route::get('/account', [accountController::class, 'index'])->name('account');
    Route::get('/add_account', [accountController::class, 'create'])->name('add_account');
    Route::post('/add_account', [accountController::class, 'addData'])->name('add_account');

    

    Route::get('/folder', [ArsipController::class, 'index'])->name('folder');
    Route::get('/add_folder', [ArsipController::class, 'add_arsip'])->name('add_folder');
    Route::post('/simpan', [ArsipController::class, 'tambah_arsip'])->name('tambah_arsip');
    Route::get('/hapus/{id_nya}', [ArsipController::class, 'hapus_Arsip'])->name('hapus_arsip');
    Route::get('/edit/{id}', [ArsipController::class, 'edit'])->name('edit');

    Route::get('standar_akreditasi', [StandarController::class, 'index'])->name('standar');
  

});

Route::prefix('user')->group(function () {
    Route::get('/', function () {
        return view('user.dashboard');
    });
});
