<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HR\DashboardController;
use App\Http\Controllers\HR\KaryawanController;
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
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});




Route::group(['middleware' => ['role:super admin|hr|direktur|keuangan']], function(){
    Route::get('/hr/karyawan', [KaryawanController::class, 'index'])->name('hr.karyawan');
    Route::get('/hr/dashboard', DashboardController::class)->name('hr.dashboard');
    Route::get('/hr/gaji',[KaryawanController::class,'gaji'])->name('hr.gaji');
    Route::get('/hr/absensi', [KaryawanController::class, 'absensi'])->name('hr.absensi');
});
