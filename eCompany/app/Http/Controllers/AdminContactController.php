<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminContact;
class AdminContactController extends Controller
{
    public function index()
    {
        $contact = AdminContact::get();
        return view('AdminContact',compact('contact'));
    }
    public function edit(Request $request,$id)
    {
        $contact = AdminContact::first();
        return redirect()->back()->with(compact('contact'));
    }
    public function update(Request $request)
    {
        $contact =AdminContact::find($request->id);
        $contact->address=$request->input('address');
        $contact->email=$request->input('email');
        $contact->phone=$request->input('phone');
        $contact->save();
        return redirect()->back();

    }
}
