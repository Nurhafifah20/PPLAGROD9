<?php

use App\Http\Controllers\CirifisikController;
use App\Http\Controllers\DiagnosaController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');




Route::name('diagnosa.')->group(function(){
    Route::get('/diagnosa', function(){
        return view('diagnosa.index');
    })->name('index');

    Route::get('/diagnosa/list', [DiagnosaController::class, 'list'])->name('list');
    Route::get('/diagnosa/hasil/{id}', [DiagnosaController::class, 'hasil'])->name('hasil');
    Route::get('/diagnosa/tambah/{id}', [DiagnosaController::class, 'tambah'])->name('tambah');
    Route::post('/diagnosa/store', [DiagnosaController::class, 'store'])->name('store');
});

Route::name('ciri-fisik.')->group(function(){
    Route::get('/ciri-fisik', [CirifisikController::class, 'index'])->name('index');
    Route::get('/ciri-fisik/list', [CirifisikController::class, 'list'])->name('list');
    Route::get('/ciri-fisik/edit/{id}', [CirifisikController::class, 'edit'])->name('edit');
    Route::post('/ciri-fisik/update', [CirifisikController::class, 'update'])->name('update');
    Route::get('/ciri-fisik/form', [CirifisikController::class, 'tambah'])->name('form');
    Route::post('/ciri-fisik/store', [CirifisikController::class, 'store'])->name('store');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
