<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{

    //mostra todos

    public function index()
    {

        $post = Post::all();

        return response()->json($post);

       // $request = Post::find();
      //  return $request;
    }

    //public function getById($id){

       // return Post::find($id);
  //  }

    //criar
    public function store(Request $request)
    {

       $post = new Post;

       $post->usuario = $request->usuario;
       $post->titulo = $request->titulo;
       $post->descricao = $request->descricao;

       $post->save();

      /* $request->json([
            "message" => "post criado com sucesso. "
        ], 200);
*/
        return response()->json(["message" => "post criado com sucesso. "], 200);

    }


    //mostra um item
    public function show(Request $request)
    {
        $request = $request->only([1, 3]);

        return response()->json($request);
    }


    //editar
    public function edit(Request $request)
    {
        //
    }


   //deletar
    public function destroy(Request $request)
    {
        //
    }
}
