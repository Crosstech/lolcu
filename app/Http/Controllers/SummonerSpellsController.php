<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SummonerSpell;
use App\Models\Comment;

class SummonerSpellsController extends Controller
{
    public function all(){
        $spells = SummonerSpell::get();
        return view('summonerspells.index', compact('spells'));
    }

    public function get($seo){
        $spell = SummonerSpell::where('seo',$seo)->first();
        $champions= $spell->champions;
        return view('summonerspells.detail',compact('spell','champions'));
    }

    public function save_comment(Request $request)
    {
        $spell = SummonerSpell::where('name',$request->spell_name)->first();

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->summoner_name = $request->summoner_name;
        $comment->comment = $request->comment;

        $spell->comments()->save($comment);

        return response()->json([
            'comment'=>$comment
        ]);
    }
}
