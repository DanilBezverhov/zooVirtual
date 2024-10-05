@extends('layouts.app')

   
@section('content')
        <div class="container">
        
                
                                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Имя: {{ $aboutAnimal->name }}</div>
                                        <div class="card-body">
                                                <h5 class="card-title">Возраст: {{ $aboutAnimal->age }}</h5>
                                                <p class="card-text">Описание: {{ $aboutAnimal->description }}</p>
                                                        <div class="card-footer bg-transparent border-success">
                                                                Вид:{{ $aboutAnimal->species }}
                                                        </div>
                                        </div>
                                        
                                </div>
        
    
    
        
@endsection    
