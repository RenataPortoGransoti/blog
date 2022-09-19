<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'usuario',
        'titulo',
        'descricao',
    ];


        public function comments()
        {
            return $this->hasMany(Comment::class, 'comment_id', 'id'); //post pode ter muitos comentários
        }

}
