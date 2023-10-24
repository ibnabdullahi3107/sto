<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LGAController;

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



    Route::get('/all_categories', [CategoryController::class,'index'])->name('all_categories');
    Route::get('add_categories', [CategoryController::class, 'create'])->name('add_categories');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/all_lgas', [LGAController::class,'index'])->name('all_lgas');
    Route::get('add_lga', [LGAController::class, 'create'])->name('add_lga');
    Route::post('/lgas', [LGAController::class, 'store'])->name('lga.store');
    Route::post('/edit_lgas', [LGAController::class, 'update'])->name('lga.edit');
    Route::get('/delete_lgas/{id}', [LGAController::class, 'delete'])->name('lga.delete');




    Route::get('/all_store', [StoreController::class,'index'])->name('all_store');
    Route::get('add_store', [StoreController::class, 'create'])->name('add_store');
    Route::post('add_categories', [StoreController::class, 'store'])->name('store.create');



    Route::post('register/user', [RegisteredUserController::class, 'register'])->name('user.store');
    Route::get('add_user',[RegisteredUserController::class, 'addUser'])->name('user.create');



    Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
    Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
    Route::get('/client/index', [ClientController::class, 'index'])->name('client.index');
    Route::get('/client/excell', [ClientController::class, 'excell'])->name('client.excell');
    Route::post('/client/excell_upload', [ClientController::class, 'excellUpload'])->name('client.excell.upload');






    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/client/qrcode', [ClientController::class, 'generateQrcode'])->name('client.qrcode');


require __DIR__.'/auth.php';
