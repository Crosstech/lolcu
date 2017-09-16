<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rune;
use App\Models\Comment;

class RunesController extends Controller
{
    public function all(){
        $runes = Rune::orderBy('name')->get();
        return view('runes.index', compact('runes'));
    }

    public function get($seo){
        $rune = Rune::where('seo',$seo)->first();
        $champions = $rune->champions;
        return view('runes.detail',compact('rune','champions'));
    }

    public function save_comment(Request $request)
    {
        $rune = Rune::where('name',$request->rune_name)->first();

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->summoner_name = $request->summoner_name;
        $comment->comment = $request->comment;

        $rune->comments()->save($comment);

        return response()->json([
            'comment'=>$comment
        ]);
    }
}
