<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SummonerSpell extends Model
{
    protected $table = "summonerspells";
    protected $fillable =[
        'name',
        'spell_id',
        'description',
        'image'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'summoner_level'
    ];
}
