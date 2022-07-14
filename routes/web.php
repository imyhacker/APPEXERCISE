<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\RAController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth as Ath;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => '/'], function($slug_baca = NULL, $slug_video = NULL){
    Route::get('/', [ClientController::class, 'index'])->name('index');
    Route::get('/about', [ClientController::class, 'about'])->name('about');
    Route::get('/blog', [ClientController::class, 'blog'])->name('blog');
    Route::get('/blog/{slug_blog}/baca', [ClientController::class, 'baca'])->name('baca', $slug_baca);
    Route::get('/video', [ClientController::class, 'video'])->name('video');
    Route::get('/video/{slug_video}/tonton', [ClientController::class, 'tonton'])->name('tonton', $slug_video);
    Route::get('/gallery', [ClientController::class, 'gallery'])->name('gallery');
    Route::get('/contact', [ClientController::class, 'contact'])->name('contact');
    Route::post('/send_mail', [ClientController::class, 'send_mail'])->name('send_mail');
});

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'home/siswa'], function($id = NULL, $name = NULL){

    // DATA SISWA
    Route::get('/data_siswa', [SiswaController::class, 'data_siswa'])->middleware('can:isAdmin')->name('data_siswa');
    Route::post('/data_siswa/tambah_siswa', [SiswaController::class, 'tambah_siswa'])->middleware('can:isAdmin')->name('tambah_siswa');
    Route::get('/data_siswa/{id}/hapus_siswa', [SiswaController::class, 'hapus_siswa'])->middleware('can:isAdmin')->name('hapus_siswa', $id);
    Route::get('/data_siswa/{id}/edit_siswa', [SiswaController::class, 'edit_siswa'])->middleware('can:isAdmin')->name('edit_siswa', $id);
    Route::post('/data_siswa/{id}/edit_siswa/update_siswa', [SiswaController::class, 'update_siswa'])->middleware('can:isAdmin')->name('update_siswa', $id);
    Route::post('/data_siswa/upload_siswa', [SiswaController::class, 'upload_siswa'])->middleware('can:isAdmin')->name('upload_siswa');

    // ABSEN SISWA
    Route::get('/absen_siswa', [SiswaController::class, 'absen_siswa'])->name('absen_siswa');
    Route::post('/absen_siswa/upload_absen', [SiswaController::class, 'upload_absen'])->name('upload_absen');
    Route::get('/absen_siswa/{name}/reset', [SiswaController::class, 'reset'])->name('reset', $name);

});

Route::group(['prefix' => 'home/keuangan'], function(){
    Route::get('/data_keuangan', [KeuanganController::class, 'data_keuangan'])->name('data_keuangan');
    Route::post('/data_keuangan/tambah_pemasukan', [KeuanganController::class, 'tambah_pemasukan'])->name('tambah_pemasukan');
    Route::post('/data_keuangan/tambah_pengeluaran', [KeuanganController::class, 'tambah_pengeluaran'])->name('tambah_pengeluaran');
    Route::get('/data_keuangan/reset_data_keuangan', [KeuanganController::class, 'reset_data_keuangan'])->name('reset_data_keuangan');
});

Route::group(['prefix' => 'home/jurnal'], function($slug_blog = NULL, $id = NULL, $slug_tag = NULL, $slug_video = NULL){
    Route::get('/blog', [JurnalController::class, 'blog'])->name('blog');

    // TAG
    Route::post('/blog/upload_tag', [JurnalController::class, 'upload_tag'])->name('upload_tag');
    Route::get('/blog/{slug_tag}/hapus', [JurnalController::class, 'hapus_tag'])->name('hapus_tag', $slug_tag);

    // BLOG
    Route::post('/blog/upload_blog', [JurnalController::class, 'upload_blog'])->name('upload_blog');
    Route::get('/blog/{slug_blog}/hapus_blog', [JurnalController::class, 'hapus_blog'])->name('hapus_blog', $slug_blog);
    Route::get('/blog/{slug_blog}/edit_blog', [JurnalController::class, 'edit_blog'])->name('edit_blog', $slug_blog);
    Route::post('/blog/{slug_blog}/update_blog', [JurnalController::class, 'update_blog'])->name('update_blog', $slug_blog);


    // FOTO
    Route::get('/foto', [JurnalController::class, 'foto'])->name('foto');
    Route::post('/foto/upload_foto', [JurnalController::class, 'upload_foto'])->name('upload_foto');
    Route::get('/foto/{id}/hapus_foto', [JurnalController::class, 'hapus_foto'])->name('hapus_foto', $id);
    Route::get('/foto/{id}/edit', [JurnalController::class, 'edit_foto'])->name('edit_foto', $id);
    Route::post('/foto/{id}/edit/update_foto', [JurnalController::class, 'update_foto'])->name('update_foto', $id);

    // VIDEO
    Route::get('/video', [JurnalController::class, 'video'])->name('video');
    Route::post('/video/upload_video', [JurnalController::class, 'upload_video'])->name('upload_video');
    Route::get('/video/{slug_video}/hapus', [JurnalController::class, 'hapus_video'])->name('hapus_video', $slug_video);
});


Route::group(['prefix' => 'home/pengaturan', ['middleware'=> 'can:isAdmin']], function(){
    Route::get('/', [PengaturanController::class, 'index'])->name('pengaturan');
    Route::post('/upload', [PengaturanController::class, 'upload'])->name('upload');
});


Route::group(['prefix' => 'home/rest', 'middleware'=> 'can:isAdmin'], function(){
    Route::get('rest_siswa', [RAController::class, 'rest_siswa'])->name('rest_siswa');
    Route::get('rest_absen', [RAController::class, 'rest_absen'])->name('rest_absen');
    Route::get('rest_keuangan', [RAController::class, 'rest_keuangan'])->name('rest_keuangan');
    Route::get('rest_jurnal', [RAController::class, 'rest_jurnal'])->name('rest_jurnal');
});