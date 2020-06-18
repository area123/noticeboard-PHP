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
        $markdown = Post::where("id", $id)->first()->content;
        $parser = new Markdown();
        return view('post', [
            'content' => $parser->parse($markdown)
        ]);
    }
}
