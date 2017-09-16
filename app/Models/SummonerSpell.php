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

    public function champions()
    {
        return $this->belongsToMany('App\Models\Champion','champion_spells','spell_id','champion_id');
    }

    public function comments()
   {
       return $this->belongsToMany('App\Models\Comment','summonerSpell_comments','spell_id','comment_id')->orderBy('created_at', 'desc');
   }
}
