<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HR\DashboardController;
use App\Http\Controllers\HR\KaryawanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HR\AbsensiController;
use App\Http\Controllers\HR\GajiController;

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



Auth::routes();



Route::group(['middleware' => ['role:karyawan']], function (){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/gaji',[GajiController::class, 'gajiKaryawan'])->name('gaji');
    Route::get('/absensi',[AbsensiController::class, 'absensiKaryawan'])->name('absensi');
});




Route::group(['middleware' => ['role:super admin|hr|direktur|keuangan']], function(){
    Route::get('/hr/karyawan', [KaryawanController::class, 'index'])->name('hr.karyawan')->can('show karyawan');
    Route::get('/hr/dashboard', DashboardController::class)->name('hr.dashboard');
    Route::get('/hr/gaji',[GajiController::class,'index'])->name('hr.gaji')->can('show gaji');
    Route::get('/hr/absensi', [AbsensiController::class, 'index'])->name('hr.absensi')->can('show absensi');
    Route::get('/hr/karyawan/create', [KaryawanController::class, 'create'])->name('hr.karyawan.create')->can('create karyawan');
    Route::get('/hr/karyawan/edit', [KaryawanController::class, 'create'])->name('hr.karyawan.create')->can('edit karyawan');
    Route::get('/hr/karyawan/delete', [KaryawanController::class, 'create'])->name('hr.karyawan.create')->can('delete karyawan');
});
