<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerBlog extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function blog(){
        return view('blog');
    }
}
