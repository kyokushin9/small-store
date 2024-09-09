<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        dump('request');
        dd($request);
        $data = \request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'likes' => 'integer',
            'category_id' => '',
            'tags' => ''
        ]);

        $post = Post::create($data);

        return redirect()->route('admin.post.index');
    }
}
