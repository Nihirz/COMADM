<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminAboutUs;

class AdminAboutUsController extends Controller
{
    public function index()
    {
        $about=AdminAboutUs::get();
        return view('AdminAboutUs',compact('about'));
    }
    public function edit(Request $request,$id)
    {
        $about=AdminAboutUs::first();
        return view('EditAdminAboutUs',compact('about'));
    }
    public function update(Request $request)
    {
        $about =AdminAboutUs::find($request->id);
        $about->description =$request->input('description');
        $about->sdescription =$request->input('sdescription');
        

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $about->image = $imageName;
        }
        else
        {
            $id = $request->id;
            $update = [  
            'description'=>$request->description,
           'shortdescription'=>$request->shortdescription,
           
     ];
     $file   = $request->file("image");
        if ($request->hasfile("image")) {
        $file->move("/upload", $file->getClientOriginalName());
        $update['image'] = $file->getClientOriginalName();
        }

        About::where('id', $id)->update($update);
        return redirect()->route('admin.aboutus')->with('success', 'edit product Updated Successfully!');


            return $request;
            $about->image = '';
        }
        $about->save();
        return redirect()->route('admin.aboutus')->with('success', 'edit product Updated Successfully!');

           
    }
}
