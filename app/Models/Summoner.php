<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Summoner extends Model
{
    protected $table = 'queries';

    protected $hidden = ['summoner_name'];
}
