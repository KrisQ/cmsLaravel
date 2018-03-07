<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Handles posts

    protected $fillable = [
      'title',
      'content',
    ];


}
