<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Champion;

class ChampionsController extends Controller
{
    public function all(){

        $champions = Champion::get();
        return view('champions.index', compact('champions'));
    }

    public function get($name){
        $champion = Champion::where('name',$name)->first();
        $items = $champion->items;
        $runes = $champion->runes;
        $spells = $champion->spells;
        $masteries = $champion->masteries;
        return view('champions.detail',compact('champion','items','runes','masteries','spells'));
    }
}
