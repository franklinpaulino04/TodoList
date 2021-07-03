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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * ------------------------- TodoController -------------------------
 */

Route::get('/', [\App\Http\Controllers\TodoController::class, 'index']);
Route::post('create', [\App\Http\Controllers\TodoController::class, 'create']);
Route::post('update/{id}', [\App\Http\Controllers\TodoController::class, 'update']);
Route::get('show', [\App\Http\Controllers\TodoController::class, 'show']);
Route::post('store', [\App\Http\Controllers\TodoController::class, 'store']);
Route::get('edit', [\App\Http\Controllers\TodoController::class, 'edit']);
Route::get('delete/{id}', [\App\Http\Controllers\TodoController::class, 'destroy']);
