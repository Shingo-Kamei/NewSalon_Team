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
 //一覧画面表示用
Route::get('/', [SalonController::class,'index']);
 // 本の登録画面の表示
Route::get('/create', [SalonController::class, 'create'])->name('salon.create');
 // 本の登録処理
Route::post('/store', [SalonController::class, 'store'])->name('salon.store');
 //予約画面の表示
Route::get('/reserve',[SalonController::class, 'showPage']);

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/s', function () {
//     return view('appoint_confirms.index');
// });

// Auth::routes();

Route::get('/appoint', [App\Http\Controllers\UserController::class, 'index'])->name('appoint');
Route::post('/appoint', [App\Http\Controllers\UserController::class, 'create'])->name('create');
Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home');
Route::post('/complete', [App\Http\Controllers\UserController::class, 'complete'])->name('complete');

Route::get('/admin', [App\Http\Controllers\Admin\AppointController::class, 'index']);
Route::get('/admin/shop', [App\Http\Controllers\Admin\ShopController::class, 'index']);
Route::get('/admin/shop/create', [App\Http\Controllers\Admin\ShopController::class, 'create']);
Route::post('/admin/shop/store', [App\Http\Controllers\Admin\ShopController::class, 'store']);
Route::get('/admin/shop/create_complete', [App\Http\Controllers\Admin\ShopController::class, 'create_complete']);
Route::get('/admin/shop/edit/{id}', [App\Http\Controllers\Admin\ShopController::class, 'edit']);
Route::put('/admin/shop/{id}', [App\Http\Controllers\Admin\ShopController::class, 'update']);
Route::get('/admin/shop/update_complete', [App\Http\Controllers\Admin\ShopController::class, 'update_complete']);
Route::delete('/admin/shop/{id}', [App\Http\Controllers\Admin\ShopController::class, 'delete']);
