<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("blog", ["posts" => Post::filters(['search' => request('search'), 'category' => request('category'), 'author' => request('author')])->paginate(9)->withQueryString()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->author_id = 1;
        $post->category_id = 1;
        $post->content = $request->content;
        $post->save();

        return redirect()->to("/blog");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $post)
    {
        $data = Post::where('slug', '=', $post)->get();
        return view("post", ['post' => $data[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Post::find($id)->delete();
            return redirect()->to("/blog?success=1");
        } catch (\Throwable $th) {
            return redirect()->to('/blog?error=' + $th);
        }
    }
}
