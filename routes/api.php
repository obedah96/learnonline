<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/',[HomeController::class,'index']);
Route::get('/blogs',[BlogsController::class,'index']);
Route::post('blogs',[BlogsController::class,'store']);
Route::delete('blogs',[BlogsController::class,'destroy']);
Route::post('blogs/update',[BlogsController::class,'update']);
