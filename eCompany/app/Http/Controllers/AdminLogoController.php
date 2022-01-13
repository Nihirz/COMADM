<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminLogo;

class AdminLogoController extends Controller
{
    public function index()
    {
        $logo = AdminLogo::get();
        return view('AdminLogo',compact('logo'));
    }
    public function store(Request $request )
    {
         $logo = new AdminLogo();         
         $logo->image=$request->input('image');
         if($request->hasfile('image'))
         {
             $file = $request->file('image');
             $imageName = time().'.'.$request->image->getClientOriginalExtension();
             $request->image->move(public_path('/uploads'), $imageName);
             $logo->image = $imageName;
         }
         else
         {
             return $request;
             $logo->image = '';
         }
         $logo->save();
         $request->session()->flash('message','Data Uploded Successfully.');
         return redirect()->route('admin.logo')->with('success', 'Product Inserted Successfully!');
    }
     public function edit_logo(Request $request,$id)
    {
        $logo = AdminLogo::first();
       return redirect()->back()->with(compact('logo'));
     }
    public function update(Request $request)
    {
        $image =AdminLogo::find($request->id);
        
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('/uploads'), $imageName);
                $image->image = $imageName;
            }
            else
            {
            $id = $request->id;
            $file = $request->file("image");
            if ($request->hasfile("image")) {
            $file->move("/upload", $file->getClientOriginalName());
            $update['image'] = $file->getClientOriginalName();
            }
        
            AdminLogo::where('id', $id)->update($update);
            return redirect()->route('admin.logo')->with('success', 'image Updated Successfully!');
        
        
                return $request;
                $image->image = '';
            }
            $image->save();
            return redirect()->route('admin.logo')->with('success', 'image Updated Successfully!');
           
    }
    
}
