<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
//frontend
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/trang-chu', [HomeController::class, 'index'])->name('trang-chu');
Route::get('/logina',[HomeController::class,'logina'])->name('logina');


//backend
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/chaomung', [AdminController::class, 'chaomung'])->name('admin.chaomung');
Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::post('/admin-chaomung', [AdminController::class, 'chaomungxl'])->name('admin.chaomungxl');


//bomon
use App\Http\Controllers\BomonController;

Route::resource('/bomon', BomonController::class);
