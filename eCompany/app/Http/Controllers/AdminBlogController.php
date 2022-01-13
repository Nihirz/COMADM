<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminBlog;

class AdminBlogController extends Controller
{
    public function index()
    {
        $blog = AdminBlog::get();
        return view('AdminBlog',compact('blog'));
    }
    public function add()
    {
        return view('AdminNewBlog');
    }
    public function store(Request $request)
    {
        $blog = new AdminBlog();
        $blog->title =$request->input('title');      
        $blog->description =$request->input('description');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $blog->image = $imageName;
        }
        else
        {
            return $request;
            $blog->image = '';
        }
        $blog->save();
        $request->session()->flash('message','Data Uploded Successfully.');
        return redirect()->route('admin.blog')->with('success', 'Product Inserted Successfully!');
    }
    public function edit(Request $request,$id)
    {
        $blog =AdminBlog::where('id',$id)->first();
        return view('EditAdminBlog',compact('blog'));
    }
    public function update(Request $request)
    {
        $blog =AdminBlog::find($request->id);
        $blog->title =$request->input('title');
        $blog->description =$request->input('description');
        

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $blog->image = $imageName;
        }
        else
        {
            $id = $request->id;
            $update = [  
            'title'=>$request->title,
           'description'=>$request->description,
           
     ];
     $file   = $request->file("image");
        if ($request->hasfile("image")) {
        $file->move("/upload", $file->getClientOriginalName());
        $update['image'] = $file->getClientOriginalName();
        }

        AdminBlog::where('id', $id)->update($update);
        return redirect()->route('admin.blog')->with('success', 'edit product Updated Successfully!');


            return $request;
            $blog->image = '';
        }
        $blog->save();
        return redirect()->route('admin.blog')->with('success', 'edit product Updated Successfully!');

    }
    public function delete(Request $request,$id)
    {
        AdminBlog::where('id',$id)->delete();
        return redirect()->route('admin.blog')->with('warning','Product Deleted successfully!');
    }
}
