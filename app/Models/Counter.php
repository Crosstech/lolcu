<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    protected $table= 'champion_counters';

    protected $fillable = ['champion_id','counter_id'];

    protected $hidden = ['created_at','updated_at'];
}
