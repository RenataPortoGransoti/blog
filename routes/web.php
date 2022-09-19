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
    return view('welcome');
});


Route::get('/mostrarTodos', 'PostController@index');
Route::post('/criarPost', 'PostController@store');
Route::get('/post', 'PostController@show');
Route::put('/post', 'PostController@edit');
Route::delete('/deletePost', 'PostController@destroy');

Route::get('/todosComentarios', 'CommentController@index'); //ok
Route::post('/post/{id}/criarComment', 'CommentController@store'); //ok
Route::get('/post/{id}/comment/{id_comment}', 'CommentController@show');
Route::get('/comment/alguns', 'CommentController@show');
Route::put('/editComment', 'CommentController@edit');
Route::delete('/post/{id}/comment/{id_comment}/deleteComment', 'CommentController@destroy');
