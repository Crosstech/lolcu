<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';

    protected $fillable = [
        'name',
        'summoner_name',
        'comment'
        ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
