<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RiotApi;

class DemoController extends Controller
{
        public function index()
    {
        return view('index');
    }

    public function user_detail(Request $request)
    {
        $api = new RiotApi($request->region);

        
        $leagues = [];
        $champion_masteries =[];
        $champion_images =[];

        // Simple Api Usage
        $summoner = $api->getSummonerByName($request->summoner_name);

        $current_game = $api->getCurrentGame($summoner['id']);

        // Check if Current Game Exist
        if($current_game != null)
        {
            $participants = $current_game['participants'];

            foreach($participants as $p)
            {
                $pid = $p['summonerId'];
                $champid = $p['championId'];

                // Get Participant League
                $league_data = $api->getLeaguePosition($pid);

                foreach($league_data as $l){
                    if($l['queueType']=="RANKED_SOLO_5x5"){
                        $league_rank = $l['rank'];
                        $league_tier = $l['tier'];
                        
                        $leagues[$pid] = $league_tier." ".$league_rank;
                    }
                }

                // Get Champion Masteries by Participant ID and Champion ID
                $champion_masteries[$pid] = $api->getChampionMastery($pid, $champid)['championPoints'];

                // Get Champion Images by Participant ID
                $champion_images[$pid] = Champion::where('champion_id', $champid)->select('name','image')->get();
            }
        }
        
        return view('profile.index', compact('current_game', 'summoner','leagues','champion_masteries','champion_images'));
    }
}
