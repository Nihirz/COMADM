<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminSlider;

class AdminSilderController extends Controller
{
    public function index()
    {
        $slider = AdminSlider::get();
        return view('AdminSlider',compact('slider'));
    }
    public function addnew()
    {
        return view('AdminNewSlider');
    }
    public function edit(Request $request,$id)
    {
        $slider =AdminSlider::where('id',$id)->first();
        return view('EditAdminSlider',compact('slider'));
    }
    public function store(Request $request)
    {
        $slider = new AdminSlider();
        $slider->title =$request->input('title');      
        $slider->description =$request->input('description');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $slider->image = $imageName;
        }
        else
        {
            return $request;
            $slider->image = '';
        }
        $slider->save();
        $request->session()->flash('message','Data Uploded Successfully.');
        return redirect()->route('admin.slider')->with('success', 'Product Inserted Successfully!');
    }
    public function update(Request $request)
    {
        $slider =AdminSlider::find($request->id);
        $slider->title =$request->input('title');
        $slider->description =$request->input('title');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $slider->image = $imageName;
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

        AdminSlider::where('id', $id)->update($update);
        return redirect()->route('admin.slider')->with('success', 'edit product Updated Successfully!');


            return $request;
            $slider->image = '';
        }
        $slider->save();
        return redirect()->route('admin.slider')->with('success', 'edit product Updated Successfully!');
    }
    public function delete(Request $request,$id)
    {
        AdminSlider::where('id',$id)->delete();
        return redirect()->route('admin.slider')->with('warning','Team Deleted successfully!');
    }
}
