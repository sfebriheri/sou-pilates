<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\PilatesClass;

class BookingController extends Controller
{
    public function index()
    {
        $classes = PilatesClass::all();
        return view('booking.index', compact('classes'));
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'class_id' => 'required|exists:pilates_classes,id',
            'date' => 'required|date|after:today',
            'time' => 'required',
            'message' => 'nullable|string',
        ]);
        
        $booking = Booking::create($validated);
        
        return redirect()->route('booking')->with('success', 'Your booking has been received. We will contact you shortly to confirm.');
    }
}