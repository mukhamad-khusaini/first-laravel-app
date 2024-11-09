<?php

use Illuminate\Support\Facades\Route;
// $dataBlog=require("../storage/data.json");

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view("blog");
});
Route::get('/blog/cck', function () {
    return view("blogPage1");
});
Route::get('/blog/cmu', function () {
    return view("blogPage2");
});
