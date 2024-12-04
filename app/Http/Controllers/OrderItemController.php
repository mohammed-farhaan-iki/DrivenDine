<?php

namespace App\Http\Controllers;

use App\Models\orders;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index()
    {
        // Fetch all order items
        $orderItems = orders::all();

        // Return data to the view
        return view('orders.index', compact('orderItems'));
    }
    public function updateStatus(Request $request, $id)
{
    $orderItem = orders::find($id);

    if ($orderItem) {
        $orderItem->status = $request->input('status');
        $orderItem->save();

        // Flash success message
        session()->flash('success', 'Order status updated successfully!');
    } else {
        // Flash error message if the order item is not found
        session()->flash('error', 'Order item not found.');
    }

    return redirect()->route('orders.index'); // Redirect back to the order list
}

}