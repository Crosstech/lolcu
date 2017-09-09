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
    public function get_all_champions()
    {
        $champions = Champion::get();
        return response()->json([
            'champions'=>$champions
        ]);
    }

    public function get_champion(Request $request)
    {
        $champion = Champion::where('name',$request->name)->first();   
        return response()->json([
            'champion_id'=>$champion->id,
            'image'=>$champion->image,
            'name'=>$champion->name
        ]);
    }

    public function get_champion_comments(Request $request)
    {
        $champion = Champion::where('name',$request->champion_name)->first();   
        return response()->json([
            'comments'=>$champion->comments
        ]);
    }
    
    public function get_all_items()
    {
        $items = Item::get();
        return response()->json([
            'items'=>$items
        ]);
    }

    public function get_item(Request $request)
    {
        $item = Item::where('name',$request->name)->first();
        return response()->json([
            'item_id'=>$item->id,
            'image'=>$item->image,
            'name'=>$item->name
        ]);
    }

    public function get_item_tip(Request $request)
    {
        $item = Item::find($request->item_id);
        $tips = $item->itemTips;
        return response()->json([
            'itemTips' => $tips
        ]);

    }

    public function get_item_comments(Request $request)
    {
        $item = Item::where('name',$request->item_name)->first();
        return response()->json([
            'comments'=>$item->comments
        ]);
    }

    public function get_all_masteries()
    {
        $masteries = Mastery::get();
        return response()->json([
            'masteries'=>$masteries
        ]);
    }

    public function get_mastery_comments(Request $request)
    {
        $mastery = Mastery::where('name',$request->mastery_name)->first();
        return response()->json([
            'comments'=>$mastery->comments
        ]);
    }

    public function get_all_profile_icons()
    {
        $profile_icons = ProfileIcon::get();
        return response()->json([
            'profile_icons'=>$profile_icons
        ]);
    }

    public function get_all_runes()
    {
        $runes = Rune::get();
        return response()->json([
            'runes'=>$runes
        ]);
    }

    public function get_rune_comments(Request$request){
        $rune = Rune::where('name',$request->rune_name)->first();
        return response()->json([
            'comments'=>$rune->comments
        ]);
    }

    public function get_all_summoner_spells()
    {
        $summoner_spells = SummonerSpell::get();
        return response()->json([
            'summoner_spells'=>$summoner_spells
                    ]);
    }

    public function get_spell_comments(Request$request){
        $spell = SummonerSpell::where('name',$request->spell_name)->first();
        return response()->json([
            'comments'=>$spell->comments
        ]);
    }

   public function get_all_static_data()
    {
        $champions = Champion::get();
        $items = Item::get();
        $masteries = Mastery::get();
        $profile_icons = ProfileIcon::get();
        $runes = Rune::get();
        $summoner_spells = SummonerSpell::get();

        return response()->json([
            'champions'=>$champions,
            'items'=>$items,
            'masteries'=>$masteries,
            'profile_icons'=>$profile_icons,
            'runes'=>$runes,
            'summoner_spells'=>$summoner_spells,
        ]);
    }
}
