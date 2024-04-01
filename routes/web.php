<?php

use App\Livewire\Calculator;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/calculator', function () {
//    return view('livewire.calculator', [
//
//        'component' => Calculator::class
//    ]);
//});
//Route::get('/calculator', \App\Http\Livewire\Calculator::class)->name('calculator');
Route::get('/calculator', Calculator::class);
