<?php

use App\Livewire\Calculator;
use App\Livewire\TodoList;
use Illuminate\Support\Facades\Route;

Route::get('/counter', function () {
    return view('welcome');
})->name('counter');

//Route::get('/calculator', function () {
//    return view('livewire.calculator', [
//
//        'component' => Calculator::class
//    ]);
//});
//Route::get('/calculator', \App\Http\Livewire\Calculator::class)->name('calculator');
Route::get('/calculator', Calculator::class)->name('calculator');
Route::get('/todo-list', TodoList::class)->name('todo-list');

