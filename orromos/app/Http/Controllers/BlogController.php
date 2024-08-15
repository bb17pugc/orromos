<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Auth;
class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function NewBlog()
    {
        return view('blog.form');
    }

    public function Blog()
    {
        $list = Blog::all();
        return view('blogs', ['list'=>$list]);
    }


    public function SaveBlog(Request $request)
{
    // Validate the request
    $request->validate([
        'blogTitle' => 'required|string|max:255',
        'blogContent' => 'required|string',
        'blogImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Handle the image upload
    if ($request->hasFile('blogImage')) {
        $file = $request->file('blogImage');
        $imageName = time() . '.' . $file->getClientOriginalExtension(); // Create a unique name for the image
        $file->storeAs('blogImages', $imageName, 'public'); // Store in the 'public/blogImages' directory
        $imagePath = 'blogImages/' . $imageName; // Relative path to store in the database
    }

    // Save the data in the database
    $blog = new Blog();
    $blog->title = $request->input('blogTitle');
    $blog->image = $imagePath; // Store the relative path
    $blog->user_id = Auth::user()->id;
    $blog->description = $request->input('blogContent');
    $blog->save();

    return redirect()->back()->with('success', 'Blog post created successfully!');
}


    

//     public function SaveBlog(Request $request)
// {
//     $file = $request->file('blogImage');
//     $file->store('/', "public");
//     $blog = new Blog;
//     $blog->title = $request->input('blogTitle');
//     $blog->image = $request->file('blogImage');
//     $blog->user_id = Auth::user()->id;
    
//     $blog->description = $request->input('blogContent');
//     $blog->save();
// }


// protected function create(array $data)
// {
//     return blogs::create([
//         'blogTitle' => $data['blogTitle'],
//         'blogContent' => $data['blogContent'],
//         'blogImage' => $data['blogImage'],
       
//     ]);
// }

    
}
