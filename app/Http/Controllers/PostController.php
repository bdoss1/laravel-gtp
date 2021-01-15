<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        return view('add-post-form');
    }

    public function store(Request $request)
    {
        $post = new Post;

        $post->title = $request->title;
        $post->description = $request->description;

        $post->save();

        return redirect('add-post-form')->with('status', 'Form Data Has Been inserted');

    }
}
