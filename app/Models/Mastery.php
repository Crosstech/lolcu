<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mastery extends Model
{
    protected $table = "masteries";
    protected $fillable = [
        'name',
        'mastery_id',
        'description1',
        'description2',
        'description3',
        'description4',
        'description5',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'prereq',
        'ranks',
    ];
}
