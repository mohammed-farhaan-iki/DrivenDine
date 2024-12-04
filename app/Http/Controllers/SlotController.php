<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slot;

class SlotController extends Controller
{
    public function updateStatus(Request $request)
    {
        // Extract the slot and status from the request
        $slot = $request->input('slot');
        $status = $request->input('status');

        // Update the slot status in your database or perform other necessary actions
        // For example, assuming you have a Slot model:
        $slotRecord = Slot::find($slot);
        if ($slotRecord) {
            $slotRecord->status = $status;
            $slotRecord->save();
        }

        return response()->json(['success' => true]);
    }

    public function reserveSlot(Request $request)
    {
        $token = strtoupper(uniqid('TKN-'));  // Generate a unique token
        // Here you could save the selected slots and token in the database

        // Assuming that you also save selected slots in the database
        // $selectedSlots = Slot::whereIn('id', $request->slots)->update(['status' => 'reserved']);
        
        return response()->json(['success' => true, 'token' => $token]);
    }
}
