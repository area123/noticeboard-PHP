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
        $posts = Post::where('sort', $post)->paginate(20);
        return view('postlist', [
            'title' => $post,
            'posts' => $posts
        ]);
    }
}
