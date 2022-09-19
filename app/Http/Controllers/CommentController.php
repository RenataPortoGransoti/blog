<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;

class CommentController extends Controller
{
   //mostra todos
    public function index()
    {
        $comment = Comment::all();

        return response()->json($comment);
    }


   //cria comentário
    public function store(Request $request, comment $post)
    {
        $comment = new Comment;

        $comment->usuario = $request->usuario;
        $comment->descricao = $request->descricao;

        $comment->save();

         return response()->json(["message" => "comment criado com sucesso. "], 200);
    }

   //mostrar um comentário
    public function show(Request $request, $id)
    {
        return response()->json(Comment::find($id));
    }


   //atualiza um comentário
    public function update(Request $request, $id)
    {
        $comment=Comment::find($id);
        $comment->usuario = $request["titulo"];
        $comment->descricao = $request["descricao"];
        $comment->updated_at = date("Y-m-dTH:i:s");
        $comment->save();
        return $comment;
    }

    //deleta um comentário
    public function destroy(Request $request)
    {
        Comment::where('id',$request->id)->delete();
          return response()->json(true);
    }
}
