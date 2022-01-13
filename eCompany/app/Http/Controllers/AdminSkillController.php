<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminSkill;

class AdminSkillController extends Controller
{
    public function index()
    {
        $skill = AdminSkill::get();
        return view('AdminSkill',compact('skill'));
    }
    public function store(Request $request)
    {
        $skill = new AdminSkill();
        $skill->name=$request->input('name');
        $skill->bar=$request->input('bar');
        $skill->save();
        return redirect()->route('admin.skill');
    }
    public function edit(Request $request,$id)
    {
        $skill = AdminSkill::first();
        return view('EditAdminSkill',compact('skill'));
    }
    public function update(Request $request)
    {
        $skill = AdminSkill::find($request->id);
        $skill->name =$request->input('name');
        $skill->bar =$request->input('bar');
        $skill->save();
        return redirect()->route('admin.skill')->with('success', 'edit product Updated Successfully!');
    }
    public function delete(Request $request,$id)
    {
        AdminSkill::where('id',$id)->delete();
        return redirect()->route('admin.skill');
    }
}
