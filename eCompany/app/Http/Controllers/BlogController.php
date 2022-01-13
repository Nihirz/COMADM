<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminBlog;

class BlogController extends Controller
{
    public function index()
    {
        $blog = AdminBlog::get();
        return view('Blog',compact('blog'));
    }
    public function single($id)
    {
        $blog = AdminBlog::where('id',$id)->first();
        return view('SignalBlog',compact('blog'));
    }
}
