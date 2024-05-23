<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::post('/submit', function (Request $request) {
    $user = $request->user();
    /*
    dd($user); 
    dd($request->all());
    */
    return "Form submitted";
})->middleware('auth:api');
