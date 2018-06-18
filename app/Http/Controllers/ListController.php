<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function show(){
        $characters = [
            'Atlanta'       => 'Hawk',
            'Los Angeles'   => 'Laker',
            'Memphis'       => 'Grizzly'
        ];
        return view('welcome')->withCharacters($characters);
    }
}
