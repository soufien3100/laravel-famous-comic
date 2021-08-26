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
        return view('addCharacter', ['characters' => $characters, 'designers' => $designers]);
    }
    public function addDesigner() {
        $designers = Designer::all();
        return view('addDesigner',['designers' => $designers]);
    }

    public function character($id) {
        $character = Character::findOrFail($id);
        return view('character', ['character' => $character]);
    }
    
    //details de dessinateur 

    public function designer(){
        
        $designers = Designer::all();

        return view('designers', ['designers' => $designers]);
    }

}
