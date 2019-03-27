<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    function index (){
        $posts=Post::all();
        return view('layouts/Articles');
    }
public function show($post_name) {
        $post= Post::where('post_name', $post_name)->first();
        return view('layouts/affichearticles', ['post'=>$post]);
     
   }  
}
