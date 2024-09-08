<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $post = Post::where('is_publish',1)->get();
        dump($post);
        dd('1111111111');
    }
}
