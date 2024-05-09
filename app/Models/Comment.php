<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function post() //親は１つだからsない
    {
        return $this->belongsTo(Post::class);  //postに属します
    }
}
