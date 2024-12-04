<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Str;

class ReservationController extends Controller
{
    // Store reservation and generate token
    public function store(Request $request)
{
    // Validate incoming request
    $validated = $request->validate([
        'slots' => 'required|array',
        'token' => 'required|string|unique:reservations,token',  // Ensure token is unique
    ]);

    // Store reservation data
    $reservation = Reservation::create([
        'slots' => implode(',', $validated['slots']),  // Convert slots array to comma-separated string
        'token' => $validated['token'],  // Store the token passed in the request
    ]);

    // Return success response
    return response()->json([
        'success' => true,
        'message' => 'Reservation processed successfully.',
        'token' => $validated['token'],
    ]);
}

}

