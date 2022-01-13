<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminGallery;

class PortfolioController extends Controller
{
    public function index()
    {
        $gallery=AdminGallery::get();
        return view('portfolio',compact('gallery'));
    }
}
