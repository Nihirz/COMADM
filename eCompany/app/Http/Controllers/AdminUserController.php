<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use DB;

class AdminUserController extends Controller
{
    public function changepwd()
    {
        $user = User::get();
        return view('AdminChangePass',compact('user'));
    }
    public function update_pass(Request $request)
    {
        $user=Hash::make($request->password);
        DB::table('users')->where('id',$request->id)->update(['email'=>$request->email,'password'=>$user]);
        return redirect()->route('admin.changepwd')->with('success', 'User Name And Password Updated Successfully!');
    }
}
