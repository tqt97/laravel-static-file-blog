<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Spatie\Sheets\Facades\Sheets;

class PostController extends Controller
{
    public function index()
    {
        return view('pages.posts.index', [
            'posts' => Sheets::collection('posts')->all()->sortByDesc('date')->paginate(5)
        ]);
    }

    public function show(Post $post, Request $request)
    {
        // dd($post, $request);
        return view('pages.posts.show', [
            'post' => $post
        ]);
    }
}
