<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminServices;

class AdminServicesController extends Controller
{
    public function index()
    {
        $services = AdminServices::get();
        return view('AdminServices',compact('services'));
    }
    public function store(Request $request)
    {
        $services = new AdminServices();
        $services->title =$request->input('title');      
        $services->description =$request->input('description');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $services->image = $imageName;
        }
        else
        {
            return $request;
            $services->image = '';
        }
        $services->save();
        return redirect()->route('admin.services')->with('success', 'Product Inserted Successfully!');
    }
}
