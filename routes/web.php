<?php

use Illuminate\Support\Facades\Route;
use App\Models\Animals;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\animalController::class, 'allAnimals'])->name('animals.all');


Route::delete('/animals/{id}', [App\Http\Controllers\animalController::class, 'destroy'])->name('animals.destroy')->middleware('auth');
Route::get('/createanimal', [App\Http\Controllers\createAnimalController::class, 'show'])->name('animals.create.show');
Route::post('/createanimal/add', [App\Http\Controllers\createAnimalController::class, 'update'])->name('animals.create')->middleware('auth');
Route::get('/aboutanimal/{id}', [App\Http\Controllers\createAnimalController::class, 'about'])->name('animals.about');


