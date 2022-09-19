<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Rotas do Post
Route::post('/criarPost', [PostController::class, 'store']);

Route::get('/mostrarTodos', [PostController::class, 'index']);

Route::get('/post/{id}', [PostController::class, 'show']);

Route::put('/post/{id}', [PostController::class, 'edit']);

Route::delete('/deletePost', [PostController::class, 'destroy']);

//Rotas do Comment
Route::post('/post/{id}/criarComment', [CommentController::class, 'store']);

Route::get('/post/{id}/todosComentarios', [CommentController::class, 'index']);

Route::get('/post/{id}/comment/{id_comment}', [CommentController::class, 'show']);

Route::put('/post/{id}/comment/{id_comment}', [CommentController::class, 'update']);

Route::delete('/deleteComment', [CommentController::class, 'destroy']);
