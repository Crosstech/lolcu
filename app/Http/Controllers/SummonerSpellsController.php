<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SummonerSpell;

class SummonerSpellsController extends Controller
{
    public function all(){
        $spells = SummonerSpell::get();
        return view('summonerspells.index', compact('spells'));
    }

    public function get($seo){
        $spell = SummonerSpell::where('seo',$seo)->first();
        return view('summonerspells.detail',compact('spell'));
    }
}
