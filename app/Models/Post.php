<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function comments()  //適当につけた
    {
        return $this->hasMany(Comment::class);  //hasMany 子をたくさん持っている
    }
}