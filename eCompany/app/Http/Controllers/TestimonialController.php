<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminTestimonials;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonial = AdminTestimonials::get();
        return view('tesimonial',compact('testimonial'));
    }
}
