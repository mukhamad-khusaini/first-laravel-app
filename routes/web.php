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

    $data = Post::all();

    return view("blog", ["posts" => $data]);
});

Route::get('/blog/{id}', function ($id) {
    $post = Post::one($id);

    return view("post", ['post' => $post]);
});
