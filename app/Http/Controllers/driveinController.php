<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;
use App\Models\Reservation;

class driveinController extends Controller
{
    public function index()
    {
        $seats = Seat::all(); // Get all seats

        return view('drivein',compact('seats'));
    }
    public function bookSlot(Request $request)
    {
        $seatId = $request->input('slot_id');
        $slot = Seat::find($seatId);

        // Check if the slot is already booked
        if ($slot->is_booked) {
            return response()->json(['message' => 'Slot already booked'], 400);
        }

        // Mark the slot as booked
        $slot->is_booked = true;
        $slot->save();

        return response()->json(['message' => 'Slot booked successfully']);
    }
    // Handle payment confirmation
    public function confirmPayment(Request $request)
    {
        $slotIds = $request->input('slot_ids'); // List of selected slot ids

        // Update the selected slots to be booked
        foreach ($slotIds as $slotId) {
            $slot = Seat::find($slotId);
            $slot->is_booked = true;
            $slot->save();
        }

        return response()->json(['message' => 'Payment successful and slots confirmed']);
    }
    public function getToken($token)
{
    // Example: Fetch the reservation details based on the token
    $reservation = Reservation::where('token', $token)->first();
    
    // Return the token details as a response or view
    return response()->json(['token' => $token, 'status' => 'found']);
}
}
