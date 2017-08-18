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
       'title'
   ];

   protected $hidden= [
       'created_at',
       'updated_at',
       'description',
       'attack',
       'defense',
       'magic',
       'difficulty',
       'partype'
   ];
}
