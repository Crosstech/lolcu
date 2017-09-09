<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Champion;
use App\Models\Comment;

class ChampionsController extends Controller
{
    public function all(){

        $champions = Champion::get();
        return view('champions.index', compact('champions'));
    }

    public function get($name){
        $counters=[];

        $champion = Champion::where('name',$name)->first();
        $items = $champion->items;
        $runes = $champion->runes;
        $spells = $champion->spells;
        $masteries = $champion->masteries;
        $comments= $champion->comments;
        
        $counter_ids= $champion->counters;
        if(isset($counter_ids)){
            foreach($counter_ids as $c){
                $counters[] = Champion::find($c->counter_id);
            }
        }
        return view('champions.detail',compact('champion','items','runes','masteries','spells','comments','counters'));
    }

    public function save_comment(Request $request)
    {
        $champion = Champion::where('name',$request->champion_name)->first();

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->summoner_name = $request->summoner_name;
        $comment->comment = $request->comment;

        $champion->comments()->save($comment);

        return response()->json([
            'comment'=>$comment
        ]);

    }
}
