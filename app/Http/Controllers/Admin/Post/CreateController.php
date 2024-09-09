<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        Post::create([
            'title' => 'new post title 1',
            'content' => 'new post 1 content',
            'image' => '',
            'likes' => 3,
            'is_publish' => 1
        ]);

        dd('create');
    }
}
