<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome',['title' => 'Website Absensi Pegawai']);
});

Route::get('home',function() {
    return view('home');
});

//absensi 
Route::get('absensi',[AbsensiController::class, 'index'])->name('absensi.index');
Route::delete('absensi/{id_pegawai}', [AbsensiController::class, 'destroy'])->name('absensi.destroy');
Route::get('absensi/create', [AbsensiController::class, 'create'])->name('absensi.create');
Route::post('absensi', [AbsensiController::class, 'store'])->name('absensi.store');
Route::get('absensi/show', [AbsensiController::class, 'show'])->name('absensi.show');
Route::get('absensi/{id_pegawai}/edit', [AbsensiController::class, 'edit'])->name('absensi.edit');
Route::put('absensi/{id_pegawai}', [AbsensiController::class, 'update'])->name('absensi.update');

//pegawai 
Route::get('pegawai',[PegawaiController::class, 'index'])->name('pegawai.index');
Route::delete('pegawai/{id_pegawai}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
Route::get('pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('pegawai/show', [PegawaiController::class, 'show'])->name('pegawai.show');
Route::get('pegawai/{id_pegawai}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::put('pegawai/{id_pegawai}', [PegawaiController::class, 'update'])->name('pegawai.update');  

Route::get('/absensi', [AbsensiController::class, 'create']); // Form absensi untuk user
Route::post('/absensi', [AbsensiController::class, 'store']); // Proses penyimpanan data absensi
Route::get('/admin/absensi', [AbsensiController::class, 'index']); // Halaman admin untuk melihat data absensi
