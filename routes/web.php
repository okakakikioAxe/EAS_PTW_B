<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
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
Route::get('/',function(){
    return view ('kategori');
});
Route::get('/form/login',[PageController::class, 'login'])->name('form.login');
Route::post('/login/proses',[AuthController::class, 'proses_login'])->name('login');

Route::get('/form/register',[PageController::class, 'register'])->name('form.register');
Route::post('/register/proses',[UserController::class, 'store'])->name('register');

Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

Route::post('/form/checkout',[KeranjangController::class, 'form_checkout'])->name('form.checkout');
Route::post('/checkout',[TransaksiController::class, 'checkout'])->name('checkout');

Route::get('/kategori/{id}',[PageController::class, 'kategori'])->name('kategori');

Route::post('/barang/cari',[PageController::class, 'cari'])->name('cari');

Route::get('/admin/daftar_produk',[PageController::class, 'daftar_produk'])->name('admin.produk');

Route::get('/admin/laporan',[PageController::class, 'laporan'])->name('admin.laporan');

Route::post('/admin/cari/laporan',[PageController::class, 'cari_laporan'])->name('admin.cari_laporan');

Route::get('/admin/data',[PageController::class, 'data_admin'])->name('admin.data');

Route::get('/admin/detail_barang',[PageController::class, 'detail_barang'])->name('admin.detail_barang');

Route::get('/admin/edit_barang/{id}',[PageController::class, 'edit_barang'])->name('admin.edit_barang');

Route::get('/admin/lihat_barang/{id}',[PageController::class, 'lihat_barang'])->name('admin.lihat_barang');

Route::get('/admin/form/tambah_barang',[PageController::class, 'form_tambah_barang'])->name('admin.form_tambah_barang');

Route::post('/admin/tambah_barang',[PageController::class, 'tambah_barang'])->name('admin.tambah_barang');

Route::get('/admin/form/tambah_admin',[PageController::class, 'form_tambah_admin'])->name('admin.form_tambah_admin');

Route::post('/admin/tambah_admin',[PageController::class, 'tambah_admin'])->name('admin.tambah_admin');

Route::get('/admin/detail_admin/{id}',[PageController::class, 'detail_admin'])->name('admin.detail_admin');

Route::get('/admin/delete_admin/{id}',[PageController::class, 'delete_admin'])->name('admin.delete_admin');

Route::PUT('/admin/simpan_edit_barang/{id}',[PageController::class, 'simpan_edit_barang'])->name('admin.simpan_edit_barang');

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cek_login:admin']], function(){
        Route::get('/admin',[PageController::class, 'admin'])->name('admin');
    });

    Route::group(['middleware' => ['cek_login:pembeli']], function(){
        Route::get('/home',[PageController::class, 'home'])->name('home');
    });
});


Route::resource('barang', BarangController::class);
Route::resource('user', UserController::class);
Route::resource('keranjang', KeranjangController::class);

