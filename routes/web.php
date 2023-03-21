<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FitrahController;
use App\Http\Controllers\HargaberasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfaqKeluarController;
use App\Http\Controllers\InfaqMasukController;
use App\Http\Controllers\JamaahController;
use App\Http\Controllers\NgajiController;
use App\Http\Controllers\RekapitulasiInfaqController;
use App\Http\Controllers\RekapitulasiJamaahController;
use App\Http\Controllers\RekapitulasiZakatController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZakatmalController;

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
Route::get('/infoinfaq', [Controller::class, 'infoinfaq']);
Route::get('/infozakat', [Controller::class, 'infozakat']);

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
Route::middleware(['auth', 'user-access:amil,admin,bendahara,ustad,santri, '])->group(function () {
    Route::get('/dashboard', [Controller::class, 'test'])->name('index');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/indexuser', [UserController::class, 'indexuser']);
    Route::get('/indexsantri', [UserController::class, 'indexsantri']);
    Route::get('/addsantri/{id}', [UserController::class, 'adduserumum']);
    Route::post('/storeuserumum/{id}', [UserController::class, 'storeuserumum']);
    Route::get('/edituser/{id}', [UserController::class, 'editrole']);
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
        // rekap
        Route::get('/rekapinfaq', [RekapitulasiInfaqController::class, 'indexrekap']);
    }
);

Route::middleware(['auth', 'user-access:bendahara'])->group(function () {
    Route::get('/bendahara/home', [HomeController::class, 'bendaharaHome'])->name('bendahara.home');
});

Route::middleware(['auth', 'user-access:ustad,admin'])->group(function () {

    Route::get('/ustad/home', [HomeController::class, 'ustadHome'])->name('ustad.home');
    Route::get('/indexngaji', [NgajiController::class, 'index']);
    Route::get('/addngaji/{id}', [NgajiController::class, 'create']);
    Route::get('/detail/{id}', [NgajiController::class, 'detail']);
    Route::post('/ngaji/{id}/store', [NgajiController::class, 'store'])->name('/ngaji/{id}/store');
});
Route::middleware(['auth', 'user-access:santri'])->group(function () {
    Route::get('/santri/home', [HomeController::class, 'santriHome'])->name('santri.home');
    Route::get('/indexsantringaji', [SantriController::class, 'indexngajisantri']);
});

Route::middleware(['auth', 'user-access:amil'])->group(function () {
    Route::get('/amil/home', [HomeController::class, 'amilHome'])->name('amil.home');
});
Route::middleware(['auth', 'user-access:amil,admin'])->group(function () {
    Route::get('/zakatfitrahmasuk', [FitrahController::class, 'index']);


    Route::get('/addinfitrah', [FitrahController::class, 'addinfitrah']);
    Route::post('/simpanfitrah', [FitrahController::class, 'store']);
    Route::post('/hargaberas/{id}', [HargaberasController::class, 'hargaberas']);
    Route::get('/editinfitrah/{id}', [FitrahController::class, 'editfitrah']);
    Route::post('/simpaninfitrah/{id}', [FitrahController::class, 'update']);
    Route::get('/deleteinfitrah/{id}', [FitrahController::class, 'destroy']);
    // zakat maal
    Route::get('/zakatmalmasuk', [ZakatmalController::class, 'index']);
    Route::get('/addzakatmal', [ZakatmalController::class, 'add']);
    Route::post('/storeadd', [ZakatmalController::class, 'storeadd']);
    Route::get('/editzakatmal/{id}', [ZakatmalController::class, 'editzakatmal']);
    Route::get('/hapusmaal/{id}', [ZakatmalController::class, 'hapusmal']);
    // rekap zakat
    Route::get('/rekapzakatfitrah', [RekapitulasiZakatController::class, 'indexrekap']);
    Route::get('/rekapzakatmaal', [RekapitulasiZakatController::class, 'indexmaal']);
    Route::get('/cetaksemuamaal', [RekapitulasiZakatController::class, 'cetaksemuamaal']);
    Route::get('/cetakmaal/{awal}/{akhir}', [RekapitulasiZakatController::class, 'cetakmaal']);

    // rekap jamaah
    Route::get('/rekapjamaah', [RekapitulasiJamaahController::class, 'indexrekap']);
    // jamaah
    Route::get('/jamaah', [JamaahController::class, 'index']);
    Route::get('/createjamaah', [JamaahController::class, 'indexcreate']);
    Route::post('/storejamaah', [JamaahController::class, 'storejamaah']);
    Route::get('/editjamaah/{id}', [JamaahController::class, 'indexedit']);
    Route::post('/simpanjamaah/{id}', [JamaahController::class, 'simpaneditjamaah']);
    Route::get('/deletejamaah/{id}', [JamaahController::class, 'destroy']);
    // mustahik
    Route::get('/mustahik', [JamaahController::class, 'mustahik']);
    Route::get('/editmustahik/{id}', [JamaahController::class, 'indexeditmustahik']);
    Route::post('/simpanmustahik/{id}', [JamaahController::class, 'simpanmustahik']);
});
