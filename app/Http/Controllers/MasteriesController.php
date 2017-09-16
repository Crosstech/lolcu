<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mastery;
use App\Models\Comment;

class MasteriesController extends Controller
{
    public function all(){
        $masteries = Mastery::orderBy('name')->get();
        return view('masteries.index', compact('masteries'));
    }

    public function get($seo){
        $mastery = Mastery::where('seo',$seo)->first();
        $champions= $mastery->champions;
        return view('masteries.detail',compact('mastery','champions'));
    }

    public function save_comment(Request $request)
    {
        $mastery = Mastery::where('name',$request->mastery_name)->first();

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->summoner_name = $request->summoner_name;
        $comment->comment = $request->comment;

        $mastery->comments()->save($comment);

        return response()->json([
            'comment'=>$comment
        ]);
    }
}
