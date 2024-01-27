<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    private $bookings;

    public function __construct(Booking $bookings)
    {
        $this->bookings = $bookings;
    }
    public function addbooking(Request $request)
    {

        try {
            $this->validate($request, [
                'customer' => 'required',
                'note'     => 'required',
            ]);

            $addbooking = $request->all();
            $this->bookings->addBooking($addbooking);

            return redirect()->back()->with('status', 'success')->with('message', 'Booking Added Succesfully');
        } catch (\Exception $e) {

            Log::error('[BookingController][addbooking]Validation error: ' . 'Request=' . $request);
            return redirect()->back()->with('status', 'error')->with('message', 'booking Not Added ');
        }
    }
    public function viewbooking(Request $request)
    {
        $status = null;
        $message = null;
        $bookings = $this->bookings->all();

        return view('booking', compact('status', 'message', 'bookings'));
    }
    public function listbooking()
    {

        $status = null;
        $message = null;
        $bookings = $this->bookings->all();

        return view('booking', compact('status', 'message', 'bookings'))->render();
    }
}
