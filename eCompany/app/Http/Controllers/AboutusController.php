<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminAboutUs;

class AboutusController extends Controller
{
    public function index()
    {
        $about = AdminAboutUs::get();
        return view('aboutus',compact('about'));
    }
}
