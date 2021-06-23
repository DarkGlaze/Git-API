<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangKeluarController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('BarangKeluar/get', 'BarangKeluarController@index')->name('barangkeluar.api');
Route::get('/index', 'BarangKeluarController@indexs')->name('barangkeluar.index');
Route::post('BarangKeluar/post', 'BarangKeluarController@create')->name('barangkeluar.post');
Route::put('/BarangKeluar/update/{id}', 'BarangKeluarController@update')->name('barangkeluar.update');
Route::delete('/BarangKeluar/delete/{id}', 'BarangKeluarController@delete')->name('barangkeluar.delete');

Route::get('/create', [BarangKeluarController::class,'add'])->name('barangkeluar.create');
Route::get('/edit/{id}',[BarangKeluarController::class,'edit'])->name('barangkeluar.edit');
