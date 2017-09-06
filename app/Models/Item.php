<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table ='items';

    protected $fillable = [
        'name',
        'item_id',
        'image',
        'plaintext',
        'champions'
    ];

    protected $hidden = [
        'gold_buy',
        'gold_sell',
        'created_at',
        'updated_at'
    ];

    public function champions()
    {
        return $this->belongsToMany('App\Models\Champion','champion_items','item_id','champion_id');
    }
}
