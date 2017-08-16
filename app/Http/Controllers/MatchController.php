<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MatchController extends Controller
{
    public function get_live_game($summoner_name){
        
         $client = new \GuzzleHttp\Client();
        
         //$uri= 'https://tr1.api.riotgames.com/lol/static-data/v3/items?locale=tr_TR&api_key='.env('RITO_API_KEY');
        
         $response = $client->get($uri);
         $body = $response->getBody();
         $obj= json_decode($body);
              
        foreach($obj->data as $champion)
        {
            if(isset($champion->name)){
            print_r($champion->name);
            }
            else
            print_r('naah');
        }
        //dd($obj);

        return view('index',compact('obj'));
    }
}
