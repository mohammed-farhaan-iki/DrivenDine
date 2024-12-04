<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;  // Import the DB facade

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\Reservation;
class OrderController extends Controller
{
    public function verifyToken(Request $request)
    {
        $enteredToken = strtoupper($request->tokenNumber);
    
        // Check if the entered token exists in the reservations table
        $reservation = Reservation::where('token', $enteredToken)->first();
    
        if ($reservation) {
            return response()->json(['success' => true]);
        }
    
        return response()->json(['success' => false], 400);  // Invalid token
    }
    
    public function submitOrder(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'token' => 'required|string',  // Validate that the token is provided and is a string
            'items' => 'required|array',   // Items should be an array
            'items.*.item_name' => 'required|string|max:255', // Validate nested item_name
            'items.*.price' => 'required|numeric|min:0',      // Validate nested price
            'items.*.quantity' => 'required|integer|min:1',   // Validate nested quantity
        ]);
    
        // Extract the token and items from the validated request
        $token = $validatedData['token'];
        $items = $validatedData['items'];
    
        // Check if the token exists in the reservations table
        $reservation = Reservation::where('token', $token)->first();
    
        if (!$reservation) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid token provided'
            ], 400);
        }
    
        // Initialize a variable to track how many items were inserted successfully
        $inserted = 0;
    
        DB::beginTransaction();  // Start a database transaction for batch insert
    
        try {
            // Loop through each item and insert it into the database
            foreach ($items as $itemData) {
                $order = orders::create([  // Assuming your model is named Order
                    'token' => $token,
                    'item_name' => $itemData['item_name'],
                    'price' => $itemData['price'],
                    'quantity' => $itemData['quantity']
                ]);
    
                if ($order) {
                    $inserted++;  // Increment the counter if the insert was successful
                }
            }
    
            // Commit the transaction if at least one item was inserted
            DB::commit();
    
            // Return a success response
            if ($inserted > 0) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Order submitted successfully',
                    'inserted' => $inserted
                ], 200);
            }
    
            // If no items were inserted, return an error
            return response()->json([
                'status' => 'error',
                'message' => 'No items with quantity greater than 0 to process'
            ], 400);
    
        } catch (\Exception $e) {
            // Rollback the transaction if an error occurs
            DB::rollBack();
            Log::error('Order submission failed: ' . $e->getMessage());
    
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to submit order',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
