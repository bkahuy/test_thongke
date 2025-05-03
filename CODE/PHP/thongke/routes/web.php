<?php

use App\Http\Controllers\thongkecontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', [ThongKeController::class, 'index']);
Route::post('/thong-ke', [ThongKeController::class, 'ketqua']);



