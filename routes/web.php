<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//menampilkan sebuah halaman
Route::get('/syipa', [App\Http\Controllers\HomeController::class, 'saya'])->name('syipa');

//Donat
Route::get('/donuts',[App\Http\Controllers\donutsController::class,'index'])->name('donuts.index');
Route::get('/donuts/create', [App\Http\Controllers\donutsController::class,'create'])->name('donuts.create');
Route::get('/donuts/edit/{id}', [App\Http\Controllers\donutsController::class,'Edit'])->name('donuts.edit');
Route::post('/donuts/post', [App\Http\Controllers\donutsController::class,'store'])->name('donuts.post');
Route::get('/donuts/index/delete/{id}', [App\Http\Controllers\donutsController::class,'donutsDel']);

//menampilkan halaman admin dan pengguna
Route::get('/admin',[App\Http\Controllers\AdminController::class,'index'])->name('/admin');
Route::get('/pengguna',[App\Http\Controllers\PenggunaController::class,'index'])->name('/pengguna');
