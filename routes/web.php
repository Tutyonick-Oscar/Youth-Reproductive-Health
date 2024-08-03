<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about',function (){
    return view('about');
});
Route::get('/causes',function (){
    return view('causes');
});
Route::get('/blog',function (){
    return view('blog');
});