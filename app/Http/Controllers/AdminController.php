<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Champion;
use App\Models\Item;
use App\Models\ItemTip;
use App\Models\Counter;

class AdminController extends Controller
{
    public function item()
    {
        return view('admin.champion_items');
    }

    public function rune()
    {
        return view('admin.champion_runes');
    }

    public function mastery()
    {
        return view('admin.champion_masteries');
    }

    public function spell()
    {
        return view('admin.champion_spells');
    }

    public function tip()
    {
        return view('admin.item_tip');
    }

    public function counter()
    {
        return view('admin.champion_counters');
    }

    public function add_item_to_champion(Request $request)
    {
        $champion = Champion::find($request->champion_id);
        foreach($request->items as $item){
            $champion->items()->attach($item['id']);
        }
        return 'OK';
    }

    public function add_rune_to_champion(Request $request)
    {
        $champion = Champion::find($request->champion_id);
        foreach($request->runes as $rune){
            $champion->runes()->attach($rune['id']);
        }
        return 'OK';
    }

    public function add_mastery_to_champion(Request $request)
    {
        $champion = Champion::find($request->champion_id);
        foreach($request->masteries as $mastery){
            $champion->masteries()->attach($mastery['id']);
        }
        return 'OK';
    }

    public function add_spell_to_champion(Request $request)
    {
        $champion = Champion::find($request->champion_id);
        foreach($request->spells as $spell){
            $champion->spells()->attach($spell['id']);
        }
        return 'OK';
    }

    public function add_tip_to_item(Request $request){

        $item = Item::find($request->item_id);
        $tip = new ItemTip();
        $tip->tip = $request->tip;
        $item->itemTips()->save($tip);
        return response()->json([
            'tip'=>$tip
        ]);
    }

    public function add_counter_to_champion(Request $request){
        $champion = Champion::find($request->champion_id);
        $counter = new Counter();

            foreach($request->counters as $c){
                $counter->counter_id = $c['id'];
                $champion->counters()->save($counter);
            }
            return 'OK';    
    }
}
