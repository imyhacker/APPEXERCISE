<?php

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\AbsenController;
use App\Http\Controllers\Api\KeuanganController;
use App\Http\Controllers\Api\SiswaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


$key_admin  = 'e03f117ce854f85a4e39998062ac926fafad3008265b46cfaff09d18aaa91fb4'; // adminex SHA
$key_siswa = 'bc47001fe24b404be7c37ef886520d8bcd487e3f19ddc05d3fae51516ad2d669'; // siswati SHA
$key_blog  = '45273ac6e63876df2a31f46d4f91e51a0f68b30be12f6feb59b8884266cbbcb0'; // blogex SHA
$key_absen  = '83f5872d23747fa1fd5f714d5ca7b6954bbbca115809765a721886c19dc67fcf'; // absenex SHA
$key_keuangan = '81269c0a261b22bc2a70c4cb7a6f8557a6414046450315e3a027f384baf94570'; // keuanganex SHA

Route::group(['prefix' => 'v2/'.$key_siswa.'/siswa'], function(){
    Route::get('data_siswa', [SiswaController::class, 'data_siswa']);
    Route::get('data_siswa/cari/{id?}', [SiswaController::class, 'cari_siswa']);
    Route::post('data_siswa/upload', [SiswaController::class, 'upload_siswa']);
    Route::delete('data_siswa/hapus/{id?}', [SiswaController::class, 'hapus_siswa']);
});
Route::group(['prefix' => 'v2/'.$key_blog.'/blog'], function(){
    Route::get('data_blog', [BlogController::class, 'data_blog']);
    Route::post('data_blog/upload', [BlogController::class, 'upload_blog']);
    Route::delete('data_blog/hapus/{id?}', [BlogController::class, 'hapus_blog']);
});

Route::group(['prefix' => 'v2/'.$key_absen.'/absen'], function(){
    Route::get('data_absen', [AbsenController::class, 'data_absen']);
    Route::get('data_absen/reset/{id?}', [AbsenController::class, 'reset_absen']);
    Route::post('data_absen/absen', [AbsenController::class, 'absen_absen']);
});

Route::group(['prefix' => 'v2/'.$key_keuangan.'/keuangan'], function(){
    Route::get('data_keuangan', [KeuanganController::class, 'data_keuangan']);
    Route::post('data_keuangan/tambah_pemasukan', [KeuanganController::class, 'tambah_pemasukan']);
    Route::post('data_keuangan/tambah_pengeluaran', [KeuanganController::class, 'tambah_pengeluaran']);
});