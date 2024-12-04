<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function confirmPayment(Request $request)
    {
        // Handle payment confirmation, save order, update slot statuses, etc.
        // After successful payment, generate token and save details

        // Example: Store the reservation in a database, etc.
        session(['generatedToken' => $request->token]);  // Store token in session
        return response()->json(['success' => true]);
    }
}
