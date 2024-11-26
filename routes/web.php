<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

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

Route::get('/category/{category:name}', function (Category $category) {
    return view("blog", ['posts' => $category->post]);
});

Route::get('/author/{author:name}', function (User $author) {
    return view("blog", ['posts' => $author->post]);
});
