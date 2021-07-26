<?php

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
Route::get('/aparment/create',[\App\Http\Controllers\ApartmentsController::class,'create']);
Route::post('/aparment/',[\App\Http\Controllers\ApartmentsController::class,'store']);
Route::get('/aparment',[\App\Http\Controllers\ApartmentsController::class,'index']);

