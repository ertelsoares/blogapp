<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostsController extends Controller
{
    public function index(){
        $posts = Post::with(['user','comments'])->paginate(15);
        
        //dd($posts);
        return view('posts',['title' => 'Posts'],['posts' => $posts]);
    }
}
