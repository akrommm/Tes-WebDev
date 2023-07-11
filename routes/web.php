<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('auth/login');
});

// login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('user', UserController::class);
    Route::resource('kursus', KursusController::class);
    Route::resource('materi', MateriController::class);
    Route::get('/admin/kursus/{id}', [MateriController::class, 'edit'])->name('admin.kursus');
});
