<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class WelcomeController extends Controller
{
    //
    public function show(){
        $posts=Post::paginate(5);
        return view('welcome' ,['posts'=>$posts]);
    }
}
