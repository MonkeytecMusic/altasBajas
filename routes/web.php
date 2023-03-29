<?php

use App\Http\Controllers\Ganancias;
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

Route::get('/', [Ganancias::class, 'index']);
Route::get('/historial', [Ganancias::class, 'historial']);
Route::get('/anadir', [Ganancias::class, 'create']);
Route::post('/store', [Ganancias::class, 'store']);
Route::get('/show/{id}',[Ganancias::class, 'show'])->name('show');
Route::delete('/destroy/{id}',[Ganancias::class, 'destroy'])->name('destroy');
Route::get('/actualizar/{id}',[Ganancias::class, 'edit'])->name('edit');
Route::put('/update/{id}',[Ganancias::class, 'update'])->name('update');
