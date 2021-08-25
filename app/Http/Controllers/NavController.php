<?php

namespace App\Http\Controllers;
use App\Models\Character;
use App\Models\Designer;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home() {

        return view('home');

    }
    
    public function characters() {

        $characters = Character::all();
        
        return view('characters',['characters'=>$characters]);
    }

    public function addCharacter() {
        $characters = Character::all()->sortBy('name');
        $designers = Designer::all()->sortBy('name');
        return view('addcharacter', ['characters' => $characters, 'designers' => $designers]);
    }
    public function character($id) {
        $character = Character::findOrFail($id);
        return view('character', ['character' => $character]);
    }

}