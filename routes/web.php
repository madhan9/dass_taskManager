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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/step1', [App\Http\Controllers\HomeController::class, 'step1index']);
Route::post('/step1', [App\Http\Controllers\HomeController::class, 'step1store']);
Route::get('/step2', [App\Http\Controllers\HomeController::class, 'step2index']);
Route::post('/step2', [App\Http\Controllers\HomeController::class, 'step2store']);
Route::get('/step3', [App\Http\Controllers\HomeController::class, 'step3index']);
Route::post('/step3', [App\Http\Controllers\HomeController::class, 'step3store']);
Route::get('/step4', [App\Http\Controllers\HomeController::class, 'step4index']);
Route::post('/step4', [App\Http\Controllers\HomeController::class, 'step4store']);


