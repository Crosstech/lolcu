<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Champion;
use App\Models\Item;
use App\Models\Mastery;
use App\Models\ProfileIcon;
use App\Models\Rune;
use App\Models\SummonerSpell;

class StaticDataController extends Controller
{
    public function get_all_champions(){
        $champions = Champion::get();
        return response()->json([
            'champions'=>$champions
        ]);
    }
    public function get_all_items(){
        $items = Item::get();
        return response()->json([
            'items'=>$items
        ]);
    }
    public function get_all_masteries(){
        $masteries = Mastery::get();
        return response()->json([
            'masteries'=>$masteries
        ]);
    }
    public function get_all_profile_icons(){
        $profile_icons = ProfileIcon::get();
        return response()->json([
            'profile_icons'=>$profile_icons
        ]);
    }
    public function get_all_runes(){
        $runes = Rune::get();
        return response()->json([
            'runes'=>$runes
        ]);
    }
    public function get_all_summoner_spells(){
        $summoner_spells = SummonerSpell::get();
        return response()->json([
            'summoner_spells'=>$summoner_spells
        ]);
    }
}