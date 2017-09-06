<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use RiotApi;
use FileSystemCache;
use App\Models\Champion;
use App\Models\Summoner;

class ProfileController extends Controller
{
    public function index($name)
    {       
        $champions ='';
        $summoner = new Summoner();
        $summoner->summoner_name = $name;
        $summoner->save();

        $api = new RiotApi('tr1', new FileSystemCache(storage_path() . '/cache'));
        
        $summoner = $api->getSummonerByName($name);

        $game = $api->getCurrentGame($summoner['id']);
        $game["participants"] = $api->getParticipantDetails($game['participants']);

        // dd($game);

        foreach($game['participants'] as $p){
            $c = Champion::where('champion_id',$p['championId'])->first()->name;
            $champions[$p['summonerId']] = $c;
        }
        // Check Summoner Exists
        if($summoner != null)
        {
            return view('profile.index_old', compact('summoner', 'game','champions'));
        }
        else
        {
            return redirect()->to('not-found');
        }  
    }

    public function get_live_game()
    {

    }

    public function get_recent_games()
    {
        
    }

    public function get_count()
    {
        $query = Summoner::count();
        return response()->json([
            'query'=>$query
        ]);
    }

    public function profile_get(Request $request)
    {
        return redirect()->route('profile', ['name' => $request->summoner_name , 'region' => $request->region]);
    }
}
