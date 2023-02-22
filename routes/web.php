<?php

use App\Http\Controllers\FitrahController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfaqKeluarController;
use App\Http\Controllers\InfaqMasukController;
use App\Http\Controllers\RekapitulasiInfaqController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
// route untuk role: Admin & Bendahara
Route::middleware(['auth', 'user-access:bendahara,admin'])->group(
    function () {
        // Infaq Masuk
        Route::get('/infaqmasuk', [InfaqMasukController::class, 'indexinfaqmasuk']);
        Route::get('/addkasmasjid', [InfaqMasukController::class, 'addkasmasjid']);
        Route::post('/storekasmasjid', [InfaqMasukController::class, 'storekasmasjid']);
        Route::post('/simpankasmasjid/{id}', [InfaqMasukController::class, 'updateinfaqmasuk']);
        Route::get('/editinfaqmasuk/{id}', [InfaqMasukController::class, 'editinfaqmasuk']);
        Route::get('/hapusinfaqmasuk/{id}', [InfaqMasukController::class, 'destroyinfaqmasuk']);
        // Infaq Keluar
        Route::get('/infaqkeluar', [InfaqKeluarController::class, 'indexinfaqkeluar']);
        Route::get('/addoutkasmasjid', [InfaqKeluarController::class, 'createinfaqkeluar']);
        Route::post('/storeoutkasmasjid', [InfaqKeluarController::class, 'storeinfaqkeluar']);
        Route::get('/editoutkasmasjid/{id}', [InfaqKeluarController::class, 'ediinfaqkeluar']);
        Route::post('/simpanoutkasmasjid/{id}', [InfaqKeluarController::class, 'updateinfaqkeluar']);
        Route::get('/hapuskasmasjid/{id}', [InfaqKeluarController::class, 'destroy']);
        // all
        Route::get('/rekapinfaq', [RekapitulasiInfaqController::class, 'indexrekap']);
        Route::get('/cetaksemuainfaq', [RekapitulasiInfaqController::class, 'cetaksemuainfaq']);
        Route::get('/cetakinfaq/{awal}/{akhir}', [RekapitulasiInfaqController::class, 'cetakinfaq']);
    }
);

Route::middleware(['auth', 'user-access:bendahara'])->group(function () {
    Route::get('/bendahara/home', [HomeController::class, 'bendaharaHome'])->name('bendahara.home');
});

Route::middleware(['auth', 'user-access:ustad'])->group(function () {

    Route::get('/ustad/home', [HomeController::class, 'ustadHome'])->name('ustad.home');
});
Route::middleware(['auth', 'user-access:santri'])->group(function () {

    Route::get('/santri/home', [HomeController::class, 'santriHome'])->name('santri.home');
});

Route::middleware(['auth', 'user-access:amil'])->group(function () {
    Route::get('/amil/home', [HomeController::class, 'amilHome'])->name('amil.home');
});
Route::middleware(['auth', 'user-access:amil,admin'])->group(function () {
    Route::get('/zakatfitrahmasuk', [FitrahController::class, 'index']);
});
