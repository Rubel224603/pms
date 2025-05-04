<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BlogController;
//
//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');
//
//Route::middleware('auth:sanctum')->apiResource('blogs', BlogController::class);




Route::apiResource('blogs', BlogController::class)->only(['index', 'show']);


Route::middleware('auth:sanctum')->group(function () {

});
//Route::apiResource('blogs', BlogController::class)->only(['store', 'update', 'destroy']);


//Route::apiResource('blogs',BlogController::class);

Route::get('/blog/list',[BlogController::class,'index']);
Route::post('/blogs/store',[BlogController::class,'store']);
Route::post('/blogs/update/{id}',[BlogController::class,'update']);
Route::get('/blogs/delete/{id}',[BlogController::class,'destroy']);



