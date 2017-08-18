<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use RiotApi;

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

        $summoner = $api->getSummonerByName($name);

        $current_game = $api->getCurrentGame($summoner['id']);

        $participants = $current_game['participants'];

        return view('detail', compact('current_game', 'summoner'));
    }

    public function test(){
        $champions = DB::table('champions')->get();
        dd($champions);
    }
}
