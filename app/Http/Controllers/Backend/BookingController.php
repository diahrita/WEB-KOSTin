<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function BookingView()
    {
        $data['allDataBooking'] = Booking::all();
        return view('backend.booking.view_booking');
    }
}
