<?php

use App\Http\Controllers\SalonController;
use Illuminate\Support\Facades\Route;

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
 //予約画面の表示
Route::get('/salons',[App\Http\Controllers\SalonController::class,'index'])->name('salons');


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/s', function () {
//     return view('appoint_confirms.index');
// });

// Auth::routes();

// Route::get('/calendar', [App\Http\Controllers\UserController::class, 'show'])->name('calendar');
Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('show');

Route::get('/appoint', [App\Http\Controllers\UserController::class, 'index'])->name('appoint');
Route::post('/appoint', [App\Http\Controllers\UserController::class, 'create'])->name('create');
Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home');
Route::post('/complete', [App\Http\Controllers\UserController::class, 'complete'])->name('complete');
Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('show');

Route::get('/admin', [App\Http\Controllers\Admin\AppointController::class, 'index']);
Route::get('/admin/shop', [App\Http\Controllers\Admin\ShopController::class, 'index']);
Route::get('/admin/shop/create', [App\Http\Controllers\Admin\ShopController::class, 'create']);
Route::post('/admin/shop/create', [App\Http\Controllers\Admin\ShopController::class, 'store']);
Route::get('/admin/shop/edit/{id}', [App\Http\Controllers\Admin\ShopController::class, 'edit']);
Route::put('/admin/shop/edit/{id}', [App\Http\Controllers\Admin\ShopController::class, 'update']);
Route::delete('/admin/shop/{id}', [App\Http\Controllers\Admin\ShopController::class, 'delete']);
