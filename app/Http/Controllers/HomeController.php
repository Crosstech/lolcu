<?php

namespace App\Http\Controllers;

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
        if($current_game != null) $current_game['description'] = $this->set_game_desc($current_game['gameQueueConfigId']);

        return view('detail', compact('current_game', 'summoner'));
    }


    private function set_game_desc($id)
    {
        $desc = '';
        switch($id) {
            case 400 :
                $desc = 'NORMAL OYUN / KAPALI SEÇİM';
            case 410 :
            case 420 :
                $desc = 'DERECELİ TEK/ÇİFT';
                break;
            case 430 :
                $desc = 'NORMAL OYUN / SIRALI SEÇİM';
                break;
            case 440 :
                $desc = 'DERECELİ ESNEK';
                break;
            default:
                $desc = 'NORMAL OYUN / KAPALI SEÇİM';
                break;
        }

        return $desc;
    }

}
