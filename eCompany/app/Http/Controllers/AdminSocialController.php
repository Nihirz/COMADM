<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminSocial;

class AdminSocialController extends Controller
{
    public function index()
    {
        $socialss = AdminSocial::get();
        return view('AdminSocial',compact('socialss'));
    }
    public function edit(Request $request,$id)
    {
        $social = AdminSocial::first();
        return redirect()->back()->with(compact('social'));
    }
    public function update(Request $request)
    {
        $social =AdminSocial::find($request->id);
        $social->twitter =$request->input('twitter');
        $social->facebook =$request->input('facebook');
        $social->instagram =$request->input('instagram');
        $social->skype =$request->input('skype');
        $social->linkedin =$request->input('linkedin');
        $social->save();
        return redirect()->route('admin.social');

    }
}
