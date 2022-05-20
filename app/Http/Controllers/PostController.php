<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
    {
         $posts=Post::orderBy('id','DESC')->get();

        return view ('posts.index',compact('posts'));

    }
    public function store(PostRequest $request)
        {
        /* dd($request->all()); */
    	 $tags = explode(',', $request->tags); /* crea un array solo con tags */
        /*  dd($tags);  */
     	 $post = Post::create($request->all());
    	$post->tag($tags);

    	return back()->with('info', 'Post creado con éxito');
    }
}
