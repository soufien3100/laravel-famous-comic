<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designer;

class DesignerController extends Controller
{
    public function addDesigner(Request $request) {
        
      
        $designers = new Designer;
        
        
        $designers->name = $request->name;
        $designers->birthDay = $request->birthDay;
        $designers->nationality = $request->nationality;
        
        $designers->save();
        return redirect('designers');
    }
    public function deleteDesigner (Request $request) {
        dd($request);
        
        $designer = Character::findOrFail($request->id);
       
       
        $designer->delete();

        return redirect('designers');
    }

