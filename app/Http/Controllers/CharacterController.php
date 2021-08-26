<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;


class CharacterController extends Controller
{
    public function addCharacter(Request $request) {
       
        $characters = new Character;
        
        
        $characters->name = $request->name;
        $characters->creationDate = $request->creationDate;
        $characters->link = $request->link;
        $characters->designer_id = $request->designer_id;
        $characters->save();
        return redirect('characters');
    }

    public function deleteCharacter (Request $request) {
        
        $characters = Character::findOrFail($request->id);
       
       
        $characters->delete();

        return redirect('characters');
    }

    public function updateCharacter(Request $request){
        $characters = Character::findOrFail($request->id);
        $characters->name = $request->name;
        $characters->creationDate = $request->creationDate;
        $characters->link = $request->link;
        $characters->designer_id = $request->designer_id;
        $characters->save();
        
        return redirect('characters');
        
    }

}
