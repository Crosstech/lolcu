<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table= 'news';

    public function tags()
    {
        return $this->hasMany('App\Models\Tag');
    }
    
}
