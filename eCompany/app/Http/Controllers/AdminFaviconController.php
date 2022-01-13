<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminFavicon;

class AdminFaviconController extends Controller
{
    public function index()
    {
        $favicon = AdminFavicon::get();
        return view('AdminFavicon',compact('favicon'));
    }
    public function edit(Request $request,$id)
    {
        $favicon = AdminFavicon::first();
        return redirect()->back()->with(compact('favicon'));
    }
    public function update(Request $request)
    {
        $image =AdminFavicon::find($request->id);
        
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
        
            AdminFavicon::where('id', $id)->update($update);
            return redirect()->route('admin.favicon')->with('success', 'image Updated Successfully!');
        
        
                return $request;
                $image->image = '';
            }
            $image->save();
            return redirect()->route('admin.favicon')->with('success', 'image Updated Successfully!');
    }
}
