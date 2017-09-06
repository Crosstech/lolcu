<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rune;

class RunesController extends Controller
{
    public function all(){
        $runes = Rune::get();
        return view('runes.index', compact('runes'));
    }

    public function get($seo){
        $rune = Rune::where('seo',$seo)->first();
        $champions = $rune->champions;
        return view('runes.detail',compact('rune','champions'));
    }
}
