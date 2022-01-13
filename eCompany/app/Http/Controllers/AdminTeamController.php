<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminTeam;

class AdminTeamController extends Controller
{
    public function index()
    {
        $team = AdminTeam::get();
        return view('AdminTeam',compact('team'));
    }
    public function new()
    {
        return view('AdminTeam');
    }
    public function edit($id)
    {
        $teames =AdminTeam::where('id',$id)->first();
        return view('EditAdminTeam',compact('teames'));
    }
    public function store(Request $request)
    {
        $team = new AdminTeam();
        $team->name =$request->input('name');      
        $team->post =$request->input('post');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $team->image = $imageName;
        }
        else
        {
            return $request;
            $team->image = '';
        }
        $team->save();
        return redirect()->route('admin.team')->with('success', 'Team Inserted Successfully!');
    }
    public function update(Request $request)
    {
        $team =AdminTeam::find($request->id);
        $team->name =$request->input('name');
        $team->post =$request->input('post');
        

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $team->image = $imageName;
        }
        else
        {
            $id = $request->id;
            $update = [  
            'name'=>$request->name,
           'post'=>$request->post,
           
        ];
        $file = $request->file("image");
        if ($request->hasfile("image")) {
        $file->move("/upload", $file->getClientOriginalName());
        $update['image'] = $file->getClientOriginalName();
        }

        AdminTeam::where('id', $id)->update($update);
        return redirect()->route('admin.team')->with('success', 'edit product Updated Successfully!');


            return $request;
            $team->image = '';
        }
        $team->save();
        return redirect()->route('admin.team')->with('success', 'edit product Updated Successfully!');

    }
    public function delete(Request $request,$id)
    {
        AdminTeam::where('id',$id)->delete();
        return redirect()->route('admin.team')->with('warning','Team Deleted successfully!');
    }
}
