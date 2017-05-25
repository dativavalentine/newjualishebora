<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['title'];

    //This has many posts so i created the posts function
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
