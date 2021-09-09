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
        $designers = Designer::all()->sortBy('name');
        return view('addCharacter', ['designers' => $designers]);
    }
    
    public function character($id) {
        
        $character = Character::findOrFail($id);
        return view('character', ['character' => $character]);
    }

    public function updateCharacter(Request $request){
        $character = Character::findOrFail($request->id);
        $designer = Designer::all()->sortBy('name');
        return view('updateCharacter', ['character' => $character, 'designer' => $designer]);
    }
    
    //details de dessinateur 

    public function designers($id){
        
        $designers = Designer::findOrFail($id);
        return view('designers', ['designers' => $designers]);
    }

}