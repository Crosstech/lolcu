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


    public function champions()
    {
        return $this->belongsToMany('App\Models\Champion','champion_masteries','mastery_id','champion_id');
    }

    public function comments()
   {
       return $this->belongsToMany('App\Models\Comment','mastery_comments','mastery_id','comment_id');
   }
}
