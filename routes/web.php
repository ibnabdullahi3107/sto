<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LGAController;
use App\Http\Controllers\TBController;


use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
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
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {











    Route::post('register/user', [RegisteredUserController::class, 'register'])->name('user.store');
    Route::get('add_user',[RegisteredUserController::class, 'addUser'])->name('user.create');












    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/client/qrcode', [ClientController::class, 'generateQrcode'])->name('client.qrcode');
Route::get('/tb/index', [TBController::class, 'index'])->name('tb.index');
Route::get('/tb/excell', [TBController::class, 'excell'])->name('tb.excell');
Route::post('/tb/excell_upload', [TBController::class, 'excellUpload'])->name('tb.excell.upload');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



require __DIR__.'/auth.php';
