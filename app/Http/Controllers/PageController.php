<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PilatesClass;
use App\Models\Instructor;
use App\Models\Testimonial;

class PageController extends Controller
{
    public function home()
    {
        $featuredClasses = PilatesClass::where('featured', true)->take(3)->get();
        $testimonials = Testimonial::take(3)->get();
        
        return view('home', compact('featuredClasses', 'testimonials'));
    }
    
    public function about()
    {
        $instructors = Instructor::all();
        return view('about', compact('instructors'));
    }
    
    public function classes()
    {
        $classes = PilatesClass::all();
        return view('classes', compact('classes'));
    }
    
    public function instructors()
    {
        $instructors = Instructor::all();
        return view('instructors', compact('instructors'));
    }
    
    public function prices()
    {
        return view('prices');
    }
    
    public function contact()
    {
        return view('contact');
    }
}