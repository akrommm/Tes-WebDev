<?php

use App\Http\Controllers\KursusController;
use App\Http\Controllers\MateriController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [KursusController::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::resource('kursus', KursusController::class);
    Route::resource('materi', MateriController::class);
    Route::get('/admin/kursus/{id}', [MateriController::class, 'edit'])->name('admin.kursus');
});
