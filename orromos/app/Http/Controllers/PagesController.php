<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function news()
    {
        return view('news');
    }
    public function contact()
    {
        return view('contact');
    }
    public function webshowroom()
    {
        return view('webshowroom');
    }
    public function impressum()
    {
        return view('impressum');
    }
    
    
}
