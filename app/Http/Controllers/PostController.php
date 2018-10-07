<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use Illuminate\Http\Request;
use App\Transformers\PostTransformer;

class PostController extends Controller
{
    public function store(Request $req)
    {
        $this->validate($req, [
            'content' => 'required'
        ]);

        $post = Post::create([
            'user_id' => Auth::guard('api')->user()->id,
            'content' => $req->content,
        ]);

        return fractal()
            ->item($post)
            ->transformWith(new PostTransformer)
            ->respond(201);
    }
}
