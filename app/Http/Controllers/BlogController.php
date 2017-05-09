<?php

namespace App\Http\Controllers;
use Request;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $search=Request::get('Search');
        $posts=Post::where('title','like','%'.$search.'%')->orderBy('id')->paginate(10);
        return view('blog.blog')->with('posts',$posts);
    }
    public function show($id)
    {
        $post=Post::find($id);
        return view('blog.article')->with('post',$post);
    }
    public function all()
    {
        $posts=Post::all();
        return $posts->toJson();
    }
}
