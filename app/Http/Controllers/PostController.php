<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;


class PostController extends Controller
{

    //mostra todos

    public function index()
    {

        $post = Post::all();

        return response()->json($post);
    }



    //criar um post
    public function store(Request $request)
    {

       $post = new Post;

       $post->usuario = $request->usuario;
       $post->titulo = $request->titulo;
       $post->descricao = $request->descricao;

       $post->save();

        return response()->json(["message" => "post criado com sucesso. "], 200);

    }


    //mostra um item
    public function show(Request $request, $id)
    {
        return response()->json(Post::find($id));
    }

    //mostra alguns
    public function showOnly(Request $request, $nome)
    {
        $post=Post::where('usuario', $nome)->get();
        $post = $post->only([8,10]);
        return response()->json($post);
    }

    //editar
    public function edit(Request $request, $id){
        $post=Post::find($id);
        $post->titulo = $request["titulo"];
        $post->descricao = $request["descricao"];
        $post->updated_at = date("Y-m-dTH:i:s");
        $post->save();
        return $post;
    }


   //deletar
    public function destroy(Request $request){

        Post::where('id',$request->id)->delete();
          return response()->json(true);
      }
}


