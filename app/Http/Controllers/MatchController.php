<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MatchController extends Controller
{
    public function get_live_game($summoner_name){
        
        $client = new \GuzzleHttp\Client();
        
        $uri= 'https://tr1.api.riotgames.com/lol/summoner/v3/summoners/by-name/'.$summoner_name.'?api_key='.env('RITO_API_KEY');
        
        $response = $client->get($uri);
        $body = $response->getBody();
        $obj= json_decode($body);
        
        
        $uri = 'https://tr1.api.riotgames.com/lol/spectator/v3/active-games/by-summoner/'.$obj->id.'?api_key='.env('RITO_API_KEY');
        
        $response = $client->get($uri);
        $body = $response->getBody();
        $obj= json_decode($body);
        
        dd($obj);

        return view('index',compact('obj'));
    }
}
