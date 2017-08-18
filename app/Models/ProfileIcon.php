<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileIcon extends Model
{
    protected $table = "profileicons";
    
    protected $fillable = [
        'icon_id',
        'image'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
