<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminClient;

class AdminClientController extends Controller
{
    public function index()
    {
        $client = AdminClient::get();
        return view('AdminClient',compact('client'));
    }
    public function store(Request $request)
    {
        $client = new AdminClient();
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $client->image = $imageName;
        }
        else
        {
            return $request;
            $client->image = '';
        }
        $client->save();
        $request->session()->flash('message','Data Uploded Successfully.');
        return redirect()->route('admin.clients')->with('success', 'Product Inserted Successfully!');
    }
    public function edit(Request $request,$id)
    {
        $client =AdminClient::where('id',$id)->first();
        return view('EditAdminClient',compact('client'));
    }
    public function update(Request $request)
    {
        $client =AdminClient::find($request->id);
        
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('/uploads'), $imageName);
                $client->image = $imageName;
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
                $client->image = '';
            }
            $client->save();
            return redirect()->route('admin.clients')->with('success', 'image Updated Successfully!');

    }
    public function delete(Request $request,$id)
    {
        AdminClient::where('id',$id)->delete();
        return redirect()->route('admin.clients')->with('warning','Product Deleted successfully!');
    }
}
