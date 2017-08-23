<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use RiotApi;
use App\Models\Champion;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function profile_get(Request $request)
    {
        return redirect()->route('profile', ['name' => $request->summoner_name , 'region' => $request->region]);
    }

    public function profile_index($region, $name)
    {
        $api = new RiotApi($region);
        $leagues = [];
        $league_object = $league_rank =  $league_tier = '';
        $champion_masteries=[];
        $champion_images=[];
        $tmp_champion='';

        $summoner = $api->getSummonerByName($name);
        $current_game = $api->getCurrentGame($summoner['id']);

        $participants = $current_game['participants'];
        foreach($participants as $p)
        {
            $pid = $p['summonerId'];
            $league_object= $api->getLeaguePosition($pid);
            foreach($league_object as $lo){
                if($lo['queueType']=="RANKED_SOLO_5x5"){
                    $league_rank = $lo['rank'];
                    $league_tier= $lo['tier'];
                    $leagues[$pid] = $league_tier." ".$league_rank;
                }
            }
            if(isset($api->getChampionMastery($pid,$p['championId'])['championPoints'])){
                $champion_masteries[$pid] = $api->getChampionMastery($pid,$p['championId'])['championPoints'];
            }
            $tmp_champion = Champion::where('champion_id',$p['championId'])->select('name','image')->get();
            $champion_images[$pid] = $tmp_champion;
        }
        
        return view('detail', compact('current_game', 'summoner','leagues','champion_masteries','champion_images'));
    }

    public function test(){
        $champions = DB::table('champions')->get();
        dd($champions);
    }
}
