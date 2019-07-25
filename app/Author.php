<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function books()
    {
        return $this->hasMany('App\Book');
    }

    public function chapters()
    {
        return $this->hasManyThrough('App\Chapter','App\Book','author_id','book_id','id','id');
    }

}
