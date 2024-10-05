<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;


class createAnimalController extends Controller
{
    public function update(Request $request) {
        
          $addAnimalValidate = $request->validate([
                
                'age' => 'required|integer',
                'name' => 'required|string',
                'description' => 'required|string',
                'species' => 'required|string'
                
                
                
            ]);
            
        
        $addAnimal = new Animals;
        $addAnimal->name= $addAnimalValidate['name'];
        $addAnimal->species= $addAnimalValidate['species'];
        $addAnimal->age= $addAnimalValidate['age'];
        $addAnimal->description= $addAnimalValidate['description'];
       
       
        $addAnimal->save();
        return redirect()->route('animals.all');
    }
    public function show() {
        
        return view('createAnimal');
       
    }
    public function about($id) {
        $aboutAnimal = Animals::findOrFail($id);
    
       

        
        
        return view('showAboutAnimal',compact('aboutAnimal'));
       
    }
}
