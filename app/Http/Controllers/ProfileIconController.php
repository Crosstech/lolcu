<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileIcon;

class ProfileIconController extends Controller
{
    public function all(){
        $icons = ProfileIcon::get();
        return view('profileicons.index', compact('icons'));
    }
}
