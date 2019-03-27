<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    function index (){
    $posts=Post::take(3)->skip(7)->get();//pour récuperer les 3 derniers articles
    return view('welcome',['posts'=>$posts]); // returner la view et les posts
        
    }
    


}
