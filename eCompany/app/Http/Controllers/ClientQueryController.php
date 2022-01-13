<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientQuery;

class ClientQueryController extends Controller
{
    public function index()
    {
        $cq =ClientQuery::get();
        return view('AdminClientQuery',compact('cq'));
    }
    public function store(Request $request)
    {
        $cq = new ClientQuery();
        $cq->name=$request->input('name');
        $cq->email=$request->input('email');
        $cq->subject=$request->input('subject');
        $cq->message=$request->input('message');
        $cq->save();
        return redirect()->back()->with('success','Your Message Successfully sent, We Contact You Soon !');
    }
}
