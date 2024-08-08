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
    $file = $request->file('blogImage');
    $file->store('/', "public");
    return $request->all();
}

protected function create(array $data)
{
    return blogs::create([
        'blogTitle' => $data['blogTitle'],
        'blogContent' => $data['blogContent'],
        'blogImage' => $data['blogImage'],
       
    ]);
}

    
}
