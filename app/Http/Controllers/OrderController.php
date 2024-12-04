<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function verifyToken(Request $request)
    {
        $enteredToken = strtoupper($request->tokenNumber);
        // Compare with the generated token stored in session or database
        $generatedToken = session('generatedToken');

        if ($enteredToken === $generatedToken) {
            return response()->json(['success' => true]);
        }
        
        return response()->json(['success' => false]);
    }
}
