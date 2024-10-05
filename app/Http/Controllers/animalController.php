<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;
use App\Models\User;

class animalController extends Controller
{
    public function allAnimals(){
        $showAllAnimals = Animals::all();
       
        return view('welcome',compact('showAllAnimals'));
    }
    
    public function destroy($id) {
       
        $animal = Animals::find($id);
    
        $animal->delete();
        
        return redirect()->route('animals.all');
        
    }
    
    
    
}
