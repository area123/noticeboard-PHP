<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return View
     */
    public function __invoke(Request $request)
    {
        $posts = Post::latest()->take(4)->get();
        $notices = Post::where('sort', 'notice')->take(15)->get();
        $frees = Post::where('sort', 'free')->take(15)->get();
        $programmings = Post::where('sort', 'programming')->take(15)->get();
        $games = Post::where('sort', 'game')->take(15)->get();
        return view('index',[
            'posts' => $posts,
            'notices' => $notices,
            'frees' => $frees,
            'programmings' => $programmings,
            'games' => $games
        ]);
    }
}
