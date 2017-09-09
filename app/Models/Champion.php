<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
   protected $table='champions';
   protected $fillable = [
       'name',
       'champion_id',
       'image',
       'title',
       'items',
       'attack',
       'defense',
       'magic',
       'difficulty',
       'partype',
       

   ];

   protected $hidden= [
       'created_at',
       'updated_at',
       'description'
   ];

   public function items()
   {
       return $this->belongsToMany('App\Models\Item','champion_items','champion_id','item_id');
   }

   public function runes()
   {
       return $this->belongsToMany('App\Models\Rune','champion_runes','champion_id','rune_id');       
   }

   public function spells()
   {
       return $this->belongsToMany('App\Models\SummonerSpell','champion_spells','champion_id','spell_id');       
   }

   public function masteries()
   {
       return $this->belongsToMany('App\Models\Mastery','champion_masteries','champion_id','mastery_id');
   }

   public function comments()
   {
       return $this->belongsToMany('App\Models\Comment','champion_comments','champion_id','comment_id');
   }

   public function counters()
   {
       return $this->hasMany('App\Models\Counter');
   }
}
