<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('converts',[\App\Http\Controllers\ConvertController::class,"store"])->name('convert');
Route::post('mark_phone/{sent_number}',[\App\Http\Controllers\ConvertController::class,"mark_phone"])->name('mark_phone');
Route::get('converts',[\App\Http\Controllers\ConvertController::class,"index"])->name('convert');


Route::get('converts/all',[\App\Http\Controllers\ConvertController::class,"all_converts"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
