<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    // Model handler
    $data = Post::all();

    return view("blog", ["posts" => $data]);
});

Route::get('/blog/{post:slug}', function (Post $post) {
    return view("post", ['post' => $post]);
});
