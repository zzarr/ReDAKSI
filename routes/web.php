<?php

use App\Http\Controllers\ArsipController;
use App\Http\Controllers\accountController;
use App\Http\Controllers\DashboardControler;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\StandarController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\JawabanController;
use App\Http\Controllers\KesiapanAkreditasi;
use App\Http\Controllers\fileController;
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

Route::redirect('/', '/login');

Route::get('/login', [loginController::class, 'login'])->name('login');
Route::post('/login_proses', [loginController::class, 'getData_login'])->name('login_proses');

Route::prefix('admin')->group(function () {
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard_admin', [DashboardControler::class, 'index'])->name('DashboardAdmin');

        Route::resource('jabatan', JabatanController::class);

        Route::get('/account', [accountController::class, 'index'])->name('account');
        Route::get('/add_account', [accountController::class, 'create'])->name('add_account');
        Route::post('/add_account', [accountController::class, 'addData'])->name('proses_addaccount');
        Route::get('/update_account/{iduser}', [accountController::class, 'update'])->name('update_account');
        Route::post('/update_account/{iduser}', [accountController::class, 'updateData'])->name('updateaccount');
        Route::delete('/delete_account/{iduser}', [accountController::class, 'delete'])->name('delete_account');

        Route::get('/folder', [ArsipController::class, 'index'])->name('folder');
        Route::get('/add_folder', [ArsipController::class, 'add_arsip'])->name('add_folder');
        Route::post('/simpan', [ArsipController::class, 'tambah_arsip'])->name('tambah_arsip');
        Route::get('/hapus/{id_nya}', [ArsipController::class, 'hapus_Arsip'])->name('hapus_arsip');
        Route::get('/edit/{id}', [ArsipController::class, 'edit'])->name('edit');
        Route::post('/update_arsip/{id}', [ArsipController::class, 'update'])->name('update_arsip');

        Route::get('/standar_akreditasi', [StandarController::class, 'index'])->name('standar');
        Route::get('/tambah_standar', [StandarController::class, 'create'])->name('add_standar');
        Route::post('/insert_standar', [StandarController::class, 'insert'])->name('insert_standar');
        Route::get('/edit_standar/{id}', [StandarController::class, 'edit'])->name('edit_standar');
        Route::post('/update_standar/{id}', [StandarController::class, 'update'])->name('update_standar');
        Route::get('/hapus_standar/{id}', [StandarController::class, 'delete'])->name('hapus_standar');
        Route::get('/show/{id}', [StandarController::class, 'show'])->name('lihat_data_soal');

        Route::get('/tambah_soal/{id}/{id_standar}', [SoalController::class, 'create'])->name('add_soal');
        Route::post('/simpan_soal/{id_standar}', [SoalController::class, 'insert'])->name('tambah_soal');
        Route::get('/edit_soal/{idp}/{id}', [SoalController::class, 'edit'])->name('edit_soal');
        Route::post('/update_soal/{idp}', [SoalController::class, 'update'])->name('update_soal');
        Route::get('/hapus_soal/{idp}/{id}', [SoalController::class, 'delete'])->name('hapus_soal');
    });
});

Route::prefix('koordinator_guru')->group(function () {
    Route::middleware('koordinator_guru')->group(function () {
        Route::get('/dashboard_KoordinatorGuru', [DashboardControler::class, 'index2'])->name('DashboardKoordinator');

        Route::get('/soal/{id}', [JawabanController::class, 'soal']);
        Route::get('/jawab_soal/{idp}', [JawabanController::class, 'jawabSoal']);
        Route::post('/simpan_jawaban', [JawabanController::class, 'simpanJwb'])->name('simpan_jawaban');
        Route::get('/jawaban/{id}', [JawabanController::class, 'show'])->name('lihat_jawaban');

        Route::get('/dokumen/{id}', [fileController::class, 'show'])->name('Dokumen_akreditasi');

        Route::get('/kesiapan_standar_akreditasi', [KesiapanAkreditasi::class, 'index'])->name('kesiapan');
    });
});

Route::prefix('guru')->group(function () {
    Route::middleware('guru')->group(function () {
        Route::get('/dashboard_guru', [DashboardControler::class, 'index3'])->name('DashboardGuru');
        Route::resource('file', fileController::class);
        Route::get('file/download', [fileController::class, 'download'])->name('download');
    });
});
