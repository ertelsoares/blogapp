<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){

        if($request->input('search')){
           $posts = Post::search($request->input('search'));
        }else{
            $posts = Post::limit(10)->with(['user','comments'])->orderby('id', 'desc')->get();
           
        }
        
        return view('home',['title' => 'Home - BLOG','posts' => $posts]);
        
    }
}
