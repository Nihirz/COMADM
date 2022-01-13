<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminGallery;

class AdminGalleyController extends Controller
{
    public function index()
    {
        $gallery = AdminGallery::get();
        return view('AdminGallery',compact('gallery'));
    }
    public function gstore(Request $request)
    {
        $gallery = new AdminGallery();
        $gallery->category =$request->input('category');      
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $gallery->image = $imageName;
        }
        else
        {
            return $request;
            $gallery->image = '';
        }
        $gallery->save();
        $request->session()->flash('message','Data Uploded Successfully.');
        return redirect()->route('admin.gallery')->with('success', 'Product Inserted Successfully!');
    }
    public function edit($id)
    {
        $gallery =AdminGallery::where('id',$id)->first();
        return view('EditAdminGallery',compact('gallery'));
    }
    public function update(Request $request)
    {
        $gallery =AdminGallery::find($request->id);
        $gallery->category =$request->input('category');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $gallery->image = $imageName;
        }
        else
        {
            $id = $request->id;
            $update = [  
            'category'=>$request->category,
           
     ];
     $file   = $request->file("image");
        if ($request->hasfile("image")) {
        $file->move("/upload", $file->getClientOriginalName());
        $update['image'] = $file->getClientOriginalName();
        }

        AdminGallery::where('id', $id)->update($update);
        return redirect()->route('admin.gallery')->with('success', 'edit product Updated Successfully!');


            return $request;
            $gallery->image = '';
        }
        $gallery->save();
        return redirect()->route('admin.gallery')->with('success', 'edit product Updated Successfully!');
    }
    public function delete(Request $request,$id)
    {
        AdminGallery::where('id',$id)->delete();
        return redirect()->route('admin.gallery')->with('warning','Team Deleted successfully!');
    }
}
