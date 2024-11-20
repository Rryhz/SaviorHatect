<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Login
Route::get("login", function(){
    return view('login');
});

//Sign up
Route::get("signup", function(){
    return view('signup');
});