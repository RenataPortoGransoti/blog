<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/criarPost', [PostController::class, 'store']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/showPost', [PostController::class, 'show']);
