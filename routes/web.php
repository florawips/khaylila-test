<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('landing.index');

Route::group(['prefix' => 'landing', 'as' => 'landing.'], function () {
    Route::get('/', [LandingController::class, 'index'])->name('index');
    Route::post('/', [LandingController::class, 'store'])->name('store');
    Route::put('/{id}', [LandingController::class, 'update'])->name('update');
    Route::patch('/{id}', [LandingController::class, 'patch'])->name('patch');
    Route::delete('/{id}', [LandingController::class, 'delete'])->name('delete');
    Route::get('/test', [LandingController::class, 'test_route'])->name('test');
});

Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::put('/registrasi/{id}', [AuthController::class, 'registrasi'])->name('registrasi');
    Route::post('/proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

//? Guru
Route::middleware('role:guru')->group(function () {

    Route::group(['prefix' => 'siswa', 'as' => 'siswa.'], function () {
        Route::get('/', [SiswaController::class, 'index'])->name('index');
        Route::get('/create', [SiswaController::class, 'create'])->name('create');
        Route::post('/', [SiswaController::class, 'store'])->name('store');
        Route::get('/{id}', [SiswaController::class, 'show'])->name('show');
        Route::post('/{id}/upload', [SiswaController::class, 'upload'])->name('upload');
        Route::get('/{id}/edit', [SiswaController::class, 'edit'])->name('edit');
        Route::put('/{id}', [SiswaController::class, 'update'])->name('update');
        Route::delete('/{id}', [SiswaController::class, 'delete'])->name('delete');
    });

    Route::get('/guru/mapel/{id}', [GuruController::class, 'mapel'])->name('guru.mapel');
    Route::get('/mapel/guru/{id}', [MapelController::class, 'guru'])->name('mapel.guru');
    Route::post('/guru/{id}/upload', [GuruController::class, 'upload'])->name('guru.upload');

    Route::resource('mapel', MapelController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('jadwal', JadwalController::class);

}); // tutup role:guru

//? Siswa
Route::middleware('role:siswa')->group(function () {
    Route::resource('kegiatan', KegiatanController::class);
}); // tutup role:siswa