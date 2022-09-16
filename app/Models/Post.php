<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'usuario',
        'titulo',
        'descricao',
    ];


        public function comments(): HasMany
        {
            return $this->hasMany(Comment::class, 'comment_id', 'id');
        }

}
