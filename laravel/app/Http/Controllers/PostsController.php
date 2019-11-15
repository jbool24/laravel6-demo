<?php

namespace App\Http\Controllers;

use DB;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function show(Post $post) {

        // $post = Post::where('slug', $slug)->first();

        return view('test', [
            'user' => User::first(),
            'post' => $post ]);
    }

    public function index(Post $post) {
        dd($post->path());
    }

    public function store(Post $post) {
        dd($post->path());
    }

    public function update(Post $post) {

    }

    public function delete(Post $post) {

    }

    public function create(Post $post) {

    }
}
