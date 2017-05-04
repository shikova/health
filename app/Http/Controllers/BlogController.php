<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts=Post::paginate(2);
        return view('pages.blog')->with('posts',$posts);
    }
    public function getBlog()
    {
        $posts=Post::all();
        return $posts;
    }
}
