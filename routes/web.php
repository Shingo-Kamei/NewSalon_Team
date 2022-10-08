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