<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;
Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('loginn', 'App\Http\Controllers\AuthController@index')->name('loginn');
Route::get('register1', 'App\Http\Controllers\AuthController@register1');
Route::post('register1', 'App\Http\Controllers\AuthController@registerSimpan')->name('register.simpan');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');


Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('dashboard', 'App\Http\Controllers\DashboardController@index');
        Route::get('pelanggan', 'App\Http\Controllers\PelangganController@index');
        Route::get('pelanggan/create', 'App\Http\Controllers\PelangganController@create');
        Route::post('pelanggan/store', 'App\Http\Controllers\PelangganController@store');
        Route::get('pelanggan/edit/{nama}', 'App\Http\Controllers\PelangganController@edit');
        Route::post('pelanggan/{nama}', 'App\Http\Controllers\PelangganController@update');
        Route::get('pelanggan/delete/{nama}', 'App\Http\Controllers\PelangganController@destroy');
        Route::get('pelanggan/exportexcel', 'App\Http\Controllers\PelangganController@exportExcel');
        Route::get('pelanggan/exportpdf', 'App\Http\Controllers\PelangganController@exportPdf');
        Route::post('pelanggan/importexcel', 'App\Http\Controllers\PelangganController@pelangganimportExcel');
        Route::get('produk', 'App\Http\Controllers\ProdukController@index');
        Route::get('produk/tambah', 'App\Http\Controllers\ProdukController@tambah');
        Route::post('produk/store', 'App\Http\Controllers\ProdukController@store');
        Route::get('produk/edit/{id_produk}', 'App\Http\Controllers\ProdukController@edit');
        Route::post('produk/{id_produk}', 'App\Http\Controllers\ProdukController@update');
        Route::get('produk/hapus/{id_produk}', 'App\Http\Controllers\ProdukController@hapus');
        Route::get('kategori', 'App\Http\Controllers\KategoriController@index');
        Route::post('kategori/store', 'App\Http\Controllers\KategoriController@store');
        Route::get('services', 'App\Http\Controllers\ServicesController@index');
        Route::get('services/tambah', 'App\Http\Controllers\ServicesController@tambah');
        Route::post('services/store', 'App\Http\Controllers\ServicesController@store');
        Route::get('services/edit/{id_services}', 'App\Http\Controllers\ServicesController@edit');
        Route::post('services/{id_services}', 'App\Http\Controllers\ServicesController@update');
        Route::get('services/hapus/{id}', 'App\Http\Controllers\ServicesController@hapus');
        Route::get('waktu', 'App\Http\Controllers\WaktuController@index');
        Route::get('waktu/tambah', 'App\Http\Controllers\WaktuController@tambah');
        Route::post('waktu/store', 'App\Http\Controllers\WaktuController@store');

        Route::post('waktu/{id}', 'App\Http\Controllers\WaktuController@update');
        Route::get('waktu/hapus/{id}', 'App\Http\Controllers\WaktuController@hapus');
        Route::get('times/getTimes', 'App\Http\Controllers\timesController@getTimes');
        Route::get('reservasi', 'App\Http\Controllers\ReservasiController@index');

        Route::get('reservasi/hapus/{id_reservasi}', 'App\Http\Controllers\ReservasiController@hapus');
        Route::post('reservasi/{id_reservasi}', 'App\Http\Controllers\ReservasiController@');

        Route::get('shift', 'App\Http\Controllers\ShiftController@index');
        Route::post('shift/store', 'App\Http\Controllers\ShiftController@store');
        Route::get('shift/hapus/{id_shift}', 'App\Http\Controllers\ShiftController@hapus');
        Route::get('shift/edit/{id_shift}', 'App\Http\Controllers\ShiftController@edit');
        Route::post('shift/{id_shift}', 'App\Http\Controllers\ShiftController@update');
        Route::get('laporanpenjualan', 'App\Http\Controllers\LaporanPenjualanController@index')->name('laporan.index');
        Route::get('laporanpenjualan/export-pdf', 'App\Http\Controllers\LaporanPenjualanController@exportPDF')->name('laporan.export-pdf');

    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::get('home', 'App\Http\Controllers\HomeController@home');
        Route::post('reservasi', 'App\Http\Controllers\ReservasiController@tambah');
        Route::get('riwayat', 'App\Http\Controllers\RiwayatTransaksiController@index');

    });
});

use App\Http\Controllers\PaymentController;

Route::get('/admin/reservasi/payment_success', [PaymentController::class, 'paymentSuccess']);

Route::get('/invoice/{id_reservasi}', [InvoiceController::class, 'show'])->name('invoice.show');
Route::get('/invoice/{id_reservasi}/download', [InvoiceController::class, 'download'])->name('invoice.download');

