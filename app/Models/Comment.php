<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'descricao',
        'usuario',
        'fk_postagem_id',
    ];



    public function posts()
    {
        return $this->belongsTo(Post::class); //um comentario pertence a um post
    }
}
