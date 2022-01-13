<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminTestimonials;

class AdminTestimonialsController extends Controller
{
    public function index()
    {
        $tesimonials = AdminTestimonials::get();
        return view('AdminTestimonials',compact('tesimonials'));
    }
    public function store(Request $request)
    {
        $tesimonials = new AdminTestimonials();
        $tesimonials->name =$request->input('name');      
        $tesimonials->post =$request->input('post');
        $tesimonials->quote =$request->input('quote');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $tesimonials->image = $imageName;
        }
        else
        {
            return $request;
            $tesimonials->image = '';
        }
        $tesimonials->save();
        $request->session()->flash('message','Data Uploded Successfully.');
        return redirect()->route('admin.testimonials')->with('success', 'Product Inserted Successfully!');
    }
    public function edit(Request $request,$id)
    {
        $tesimonials =AdminTestimonials::where('id',$id)->first();
        return view('EditAdminTesimonials',compact('tesimonials'));
    }
    public function update(Request $request)
    {
        $tesimonials =AdminTestimonials::find($request->id);
        $tesimonials->name =$request->input('name');
        $tesimonials->post =$request->input('post');
        $tesimonials->quote =$request->input('quote');       
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $tesimonials->image = $imageName;
        }
        else
        {
            $id = $request->id;
            $update = [  
            'name'=>$request->name,
           'quote'=>$request->quote,
           
     ];
     $file   = $request->file("image");
        if ($request->hasfile("image")) {
        $file->move("/upload", $file->getClientOriginalName());
        $update['image'] = $file->getClientOriginalName();
        }

        AdminTestimonials::where('id', $id)->update($update);
        return redirect()->route('admin.testimonials')->with('success', 'edit product Updated Successfully!');


            return $request;
            $tesimonials->image = '';
        }
        $tesimonials->save();
        return redirect()->route('admin.testimonials')->with('success', 'edit product Updated Successfully!');

    }
    public function delete(Request $request,$id)
    {
        AdminTestimonials::where('id',$id)->delete();
        return redirect()->route('admin.testimonials')->with('warning','Product Deleted successfully!');
    }

}
