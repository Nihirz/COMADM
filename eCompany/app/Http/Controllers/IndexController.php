<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminSlider;
use App\AdminClient;
use App\AdminServices;

class IndexController extends Controller
{
    public function index()
    {
        $slider = AdminSlider::get();
        $client = AdminClient::get();
        $services = AdminServices::get();
        return view('welcome',compact('slider','client','services'));
    }
}
