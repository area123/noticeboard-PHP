<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class WriteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->sort = $request->input('sort');
        $post->content = $request->input('content');
        $post->email = User::where('id', $request->input('id'))->first()->email;
        $post->save();

        return response()->json(['success' => true]);
    }
}
