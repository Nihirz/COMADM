<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminMap;

class AdminMapController extends Controller
{
    public function index()
    {
        $map = AdminMap::get();
        return view('AdminMap',compact('map'));
    }
    public function edit(Request $request,$id)
    {
        $map = AdminMap::first();
        return redirect()->back()->with(compact('map'));
    }
    public function map(Request $request)
    {
        $map = AdminMap::fine($request->id);
        $map->map=$request->input('map');
        $map->save();
        return redirect()->route('admin.map');
    }
}
