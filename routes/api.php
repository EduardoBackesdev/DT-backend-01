<?php

use App\Http\Controllers\DeletePostController;
use App\Http\Controllers\GetPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterPostController;
use App\Http\Controllers\UpdatePostController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/post', [RegisterPostController::class, 'post']);
    Route::put('/post/{id}', [UpdatePostController::class, 'update']);
    Route::get('/post', [GetPostController::class, 'getPost']);
    Route::get('/post/{id}', [GetPostController::class, 'getPostId']);
    Route::delete('/post/{id}', [DeletePostController::class, 'deletePost']);

});