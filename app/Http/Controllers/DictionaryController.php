<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dictionary;

class DictionaryController extends Controller
{
    public function get(){

        $items = Dictionary::get();
        return view('dictionary.index',compact('items'));
    }
}
