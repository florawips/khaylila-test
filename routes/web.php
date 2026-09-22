<?php


use App\Http\Controllers\GuruController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/siswa', [SiswaController::class, 'index']) ->name('siswa.index'); 
Route::get('/siswa/create', [SiswaController::class, 'create']) ->name('siswa.create'); 

Route::group(['prefix'=>'landing','as'=>'landing.'], function(){
    Route::get('/', [LandingController::class, 'index'])->name('index');
    Route::post('/', [LandingController::class, 'store'])->name('store');
    Route::put('//{id}', [LandingController::class, 'update'])->name('update');
    Route::patch('/{id}', [LandingController::class, 'patch'])->name('patch');
    Route::delete('/{id}', [LandingController::class, 'delete'])->name('delete');
    Route::get('/test', [LandingController::class, 'test_route'])->name('test');
});

Route::group(['prefix' => 'siswa', 'as' => 'siswa.'], function () {
    Route::get('/', [SiswaController::class, 'index'])->name('index');
    Route::get('/create', [SiswaController::class, 'create'])->name('create');
    Route::post('/', [SiswaController::class, 'store'])->name('store');
    Route::get('/{id}', [SiswaController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [SiswaController::class, 'edit'])->name('edit');
    Route::put('/{id}', [SiswaController::class, 'update'])->name('update');
    Route::delete('/{id}', [SiswaController::class, 'delete'])->name('delete');
});

Route::resource('mapel', MapelController::class);
Route::resource('guru', GuruController::class);

