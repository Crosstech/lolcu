<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Comment;

class ItemsController extends Controller
{
    public function all(){

        $items = Item::orderBy('name')->get();
        return view('items.index', compact('items'));
    }

    public function get($seo){
        $item = Item::where('seo',$seo)->first();
        $tips = $item->itemTips;
        $champions = $item->champions;
        return view('items.detail',compact('item','champions','tips'));
    }

    public function save_comment(Request $request)
    {
        $item = Item::where('name',$request->item_name)->first();

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->summoner_name = $request->summoner_name;
        $comment->comment = $request->comment;

        $item->comments()->save($comment);

        return response()->json([
            'comment'=>$comment
        ]);
    }
}
