<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemTip extends Model
{
    protected $table = "itemTips";
    
    protected $fillable = ["tip"];
    
    protected $hidden = [
        "created_at",
        "updated_at",
        "item_id"
    ];

    
}
