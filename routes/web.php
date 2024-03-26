<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\MenuController;

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

// this is link to dashboard
Route::get('/dashboard',[MenuController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/receipt',[ReceiptController::class, 'receipt'])->name('receipt');

Route::post('/add_cart/{id}',[CartController::class, 'add_cart']);

Route::get('/cart',[CartController::class, 'show_cart'])->name('cart');

Route::delete('/delete_cart/{id}', [CartController::class, 'delete_cart'])->name('cart.delete');


require __DIR__.'/auth.php';
