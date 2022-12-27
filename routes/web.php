<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
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

Route::get('/', [UserController::class, 'show'])->name('admin.user.show');
Route::get('/add', [UserController::class, 'add'])->name('admin.user.add');
Route::post('/do-add', [UserController::class, 'doAdd'])->name('admin.user.do-add');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
Route::post('/do-edit/{id}', [UserController::class, 'doEdit'])->name('admin.user.do-edit');
Route::get('/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
