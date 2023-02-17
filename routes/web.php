<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
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
