<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
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
// Route::get('/',function(){
//     return view('admin.layout');
// });

//Route::get('/', [UserController::class, 'show'])->name('admin.user.show');
//Route::get('/add', [UserController::class, 'add'])->name('admin.user.add');
//Route::post('/do-add', [UserController::class, 'doAdd'])->name('admin.user.do-add');
//Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
//Route::post('/do-edit/{id}', [UserController::class, 'doEdit'])->name('admin.user.do-edit');
//Route::get('/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');

//Route::get('/upload',[\App\Http\Controllers\FileController::class,'uploadUI'])->name('upload');
//Route::post("/do-upload",[\App\Http\Controllers\FileController::class,"upload"])->name('do-upload');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/product/list',[ProductController::class, 'list'])->name('product.list');
Route::get('/add-to-cart/{id}',[CartController::class,'addToCart'])->name('cart.add');
Route::get('/cart/',[CartController::class, 'list'])->name('cart.list');
Route::get('/delete-cart-item/{id}',[CartController::class,'delete'])->name('cart.delete');
Route::get('/change-quantity/{id}}/{quantity}',[CartController::class,'changeQuantity'])->name('cart.changeQuantity');
Route::get('/checkout/{id}',[CartController::class,'checkout'])->name('cart.checkout');;
require __DIR__.'/auth.php';

