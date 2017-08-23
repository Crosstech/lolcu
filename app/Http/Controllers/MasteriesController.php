<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mastery;

class MasteriesController extends Controller
{
    public function all(){
        $masteries = Mastery::get();
        return view('masteries.index', compact('masteries'));
    }

    public function get($seo){
        $mastery = Mastery::where('seo',$seo)->first();
        return view('masteries.detail',compact('mastery'));
    }
}