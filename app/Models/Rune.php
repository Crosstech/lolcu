<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rune extends Model
{
    protected $table = "runes";
    protected $fillable = [
        'name',
        'rune_id',
        'descripiton',
        'plaintext',
        'image'
    ];
    
    protected $hidden =[
        'created_at',
        'updated_at',
        'plaintext',
        
    ];

    public function champions()
    {
        return $this->belongsToMany('App\Models\Champion','champion_runes','rune_id','champion_id');
    }
}
