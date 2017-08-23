<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemsController extends Controller
{
    public function all(){

        $items = Item::get();
        return view('items.index', compact('items'));
    }

    public function get($seo){
        $item = Item::where('seo',$seo)->first();
        return view('items.detail',compact('item'));
    }
}
