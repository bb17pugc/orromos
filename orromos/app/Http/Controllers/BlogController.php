<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function NewBlog()
    {
        return view('blog.form');
    }

    public function SaveBlog(Request $request)
    {
        return "The method is calling";
    }
    
}
