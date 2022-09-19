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

Route::get('/post/alguns/{nome}', [PostController::class, 'showOnly']);//ver alguns comentários

Route::put('/post/{id}', [PostController::class, 'edit']);

Route::delete('/deletePost', [PostController::class, 'destroy']);

//Rotas do Comment
Route::post('/post/{id}/criarComment', [CommentController::class, 'store']); //criar comentário

Route::get('/post/{id}/todosComentarios', [CommentController::class, 'index']); //ver todos comentários

Route::get('/comment/{id}', [CommentController::class, 'show']);//ver um comentário



Route::put('comment/{id}', [CommentController::class, 'update']);//atualizar comentário

Route::delete('/comment/deletar/{id}', [CommentController::class, 'destroy']);//deletar comentário
