<?php

namespace App\Http\Controllers;

use App\Post;
use cebe\markdown\Markdown;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Handle the incoming request.
     *(
     * @param $id
     * @return View
     */
    public function __invoke($id)
    {
        $post = Post::where("id", $id)->first();
        $parser = new Markdown();
        return view('post', [
            'post' => $post,
            'content' => $parser->parse($post->content)
        ]);
    }
}
