<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Auth;
class BlogController extends Controller
{
    public function NewBlog()
    {
        return view('blog.form');
    }

    public function Blog()
    {
        return view('blogs');
    }

    

    public function SaveBlog(Request $request)
{
    $file = $request->file('blogImage');
    $file->store('/', "public");
    $blog = new Blog;
    $blog->title = $request->input('blogTitle');
    $blog->image = $request->file('blogImage');
    $blog->user_id = Auth::user()->id;
    
    $blog->description = $request->input('blogContent');
    $blog->save();
}


// protected function create(array $data)
// {
//     return blogs::create([
//         'blogTitle' => $data['blogTitle'],
//         'blogContent' => $data['blogContent'],
//         'blogImage' => $data['blogImage'],
       
//     ]);
// }

    
}
