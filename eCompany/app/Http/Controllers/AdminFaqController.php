<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminFaq;

class AdminFaqController extends Controller
{
    public function index()
    {
        $faq = AdminFaq::get();
        return view('AdminFaq',compact('faq'));
    }
    public function store(Request $request)
    {
      $faq = new AdminFaq();
      $faq->question=$request->input('question');
      $faq->answer=$request->input('answer');
      $faq->save();
      return redirect()->route('admin.faq');
    }
    public function edit(Request $request,$id)
    {
        $faq = AdminFaq::where('id',$id)->first();
        return view('EditAdminFaq',compact('faq'));
    }
    public function update(Request $request) 
    {
      $faq =AdminFaq::find($request->id);
      $faq->question =$request->input('question');
      $faq->answer =$request->input('answer');
      $faq->save();
      return redirect()->route('admin.faq')->with('success', 'edit product Updated Successfully!');
    }
    public function delete(Request $request,$id)
    {
        AdminFaq::where('id',$id)->delete();
        return redirect()->route('admin.faq')->with('warning','Team Deleted successfully!');
    }
}
