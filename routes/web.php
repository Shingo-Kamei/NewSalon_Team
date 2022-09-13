<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Appoint_ConfirmController;


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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/s', function () {
//     return view('appoint_confirms.index');
// });

Auth::routes();

Route::get('/appoint', [App\Http\Controllers\UserController::class, 'index'])->name('appoint');
Route::post('/appoint', [App\Http\Controllers\UserController::class, 'create'])->name('create');
Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home');
Route::post('/complete', [App\Http\Controllers\UserController::class, 'complete'])->name('complete');
