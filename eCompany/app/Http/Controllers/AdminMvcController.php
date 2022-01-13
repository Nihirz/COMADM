<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminMvc;

class AdminMvcController extends Controller
{
    public function index()
    {
        $mvc = AdminMvc::get();
        return view('AdminMVC',compact('mvc'));
    }
    public function edit($id)
    {
        $mvc = AdminMvc::first();
        return view('EditAdminMVC',compact('mvc'));
    }
    public function update(Request $request)
    {
        $mvc = Adminmvc::find($request->id);
        $mvc->mission =$request->input('mission');
        $mvc->vision =$request->input('vision');
        $mvc->chooseus =$request->input('chooseus');
        $mvc->save();
        return redirect()->route('admin.mvc')->with('success', 'edit product Updated Successfully!');
    }

}
