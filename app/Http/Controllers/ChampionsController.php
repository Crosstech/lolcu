<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Champion;
use App\Models\Comment;
use RiotApi;
use FileSystemCache;

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

    public function get_champions_by_type($type)
    {
        $role = '';
        switch ($type) {
            case 'tank':
                $role = 'Tank';
                $type = 'Tank';
                break;
            case 'nisanci':
                $role = 'Marksman';
                $type = 'Nişancı';
                break;
            case 'buyucu':
                $role = 'Mage';
                $type = 'Büyücü';
                break;
            case 'destek':
                $role = 'Support';            
                $type = 'Destek';
                break;
            case 'savasci':
                $role = 'Fighter';
                $type = 'Dövüşçü';
                break;
            case 'suikastci':
                $role = 'Assassin';
                $type = 'Suikastçi';
                break;
            
            default:
                $role = '';
                break;
        }
        
        $champions = Champion::where('tag1',$role)->orWhere('tag2',$role)->get();
        
        return view('champions.types',compact('champions','type'));
    }

    public function free()
    {
        $api = new RiotApi('tr1', new FileSystemCache(storage_path() . '/cache'));
        $free_champions = [];

        $frees = $api->getChampion(true);
        foreach($frees['champions'] as $free){
            $free_champions[]= app('App\Http\Controllers\StaticDataController')->get_champion_by_id($free['id']);
        }

        return view('champions.free',compact('free_champions'));
    }
}
