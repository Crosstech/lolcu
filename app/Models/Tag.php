<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'news_tags';

    protected $hidden =[
        'created_at',
        'updated_at'
    ];
}
