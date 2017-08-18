<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MatchController extends Controller
{
    public function get_live_game($summoner_name){
        
        //  $client = new \GuzzleHttp\Client();
    
        // $uri= 'https://tr1.api.riotgames.com/lol/static-data/v3/runes?locale=tr_TR&api_key=RGAPI-8829b516-8837-4950-8fa6-c65a78a14318';
    
        // $response = $client->get($uri);
        // $body = $response->getBody();
        // $obj= json_decode($body);

        // dd($obj->data[0]->id);
        // foreach($obj->data as $champion)
        // {
            
        // }
        

        $path = storage_path().'/json/summoner-rito.json';
        // $path = storage_path().'/json/summoner.json';

        $json = json_decode(file_get_contents($path),true);
        
        dd($json['data']);
        foreach($json['data'] as $champ)
        {
            // print_r($champ);
            dump($champ);

        }

        return view('index',compact('obj'));
    }
}
