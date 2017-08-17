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

        // Simple Api Usage
        $summoner = $api->getSummonerByName($request->summoner_name);

        $current_game = $api->getCurrentGame($summoner['id']);

        return view('detail', compact('current_game'));
    }
}
