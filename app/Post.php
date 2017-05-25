<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =['body'];

    //This post belongs to Teacher, so i do create a teacher function
    public function teacher(){

        return $this->belongsTo(Teacher::class);
    }

    public function topic(){

        return $this->belongsTo(Topic::class);
    }

}
