<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminContact;
use App\AdminMap;

class ContactController extends Controller
{
    public function contact()
    {
        $contact = AdminContact::get();
        $map = AdminMap::get();
        return view('Contact',compact('contact','map'));
    }
}
