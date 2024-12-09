<?php

use App\Http\Controllers\BlogController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

use function Laravel\Prompts\search;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog/{post:slug}', function (Post $post) {
    return view("post", ['post' => $post]);
});

Route::resource('/blog', BlogController::class);
// Route::get('/blog', function () {
//     return view("blog", ["posts" => Post::filters(['search' => request('search'), 'category' => request('category'), 'author' => request('author')])->paginate(9)->withQueryString()]);
// });
