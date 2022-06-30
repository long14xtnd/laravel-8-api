<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//lay danh sach
Route::get('/posts',[PostController::class,'index']);
//them 1 ban ghi
Route::post('/post',[PostController::class,'store']);
//lay 1 ban ghi
Route::get('/posts/{id}',[PostController::class,'show']);
//cap nhat ban ghi
Route::put('/posts/{id}',[PostController::class,'update']);
//xoa ban ghi
//lay 1 ban ghi
Route::delete('/posts/{id}',[PostController::class,'destroy']);
