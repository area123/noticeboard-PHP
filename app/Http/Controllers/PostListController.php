<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\View\View;

class PostListController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param $post
     * @return View
     */
    public function __invoke($post)
    {
        $posts = Post::where('sort', $post)->latest()->take(20)->get();

        return view('post', [
            'post' => $post,
            'posts' => $posts
        ]);
    }
}
