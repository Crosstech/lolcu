<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use RiotApi;
use FileSystemCache;
use App\Models\Champion;

class ProfileController extends Controller
{
    public function index($name)
    {
        $api = new RiotApi('tr1', new FileSystemCache(storage_path() . '/cache'));
        
        // Get Summonner
        $summoner = $api->getSummonerByName($name);

        // Check Summoner Exists
        if($summoner != null)
        {
            return view('profile.index', compact('summoner'));
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

    public function profile_get(Request $request)
    {
        return redirect()->route('profile', ['name' => $request->summoner_name , 'region' => $request->region]);
    }
}
