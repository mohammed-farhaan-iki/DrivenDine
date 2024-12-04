<?php
namespace App\Http\Controllers;
use App\Models\Staff;
use Illuminate\Http\Request;

class staffcontroller extends Controller
{
    // Display the staff list
    public function index()
    {
        $staffMembers = Staff::all(); // Retrieve all staff members
        return view('staff.index', compact('staffMembers'));
    }

    // Show the form to create new staff
    public function create()
    {
        return view('staff.create');
    }

    // Store the new staff details
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'age' => 'required|integer',
            'start_date' => 'required|date',
            'salary' => 'required|numeric',
        ]);

        Staff::create($validated);

        return redirect()->route('staff.index');
    }

    // Show the form to edit an existing staff
    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        return view('staff.edit', compact('staff'));
    }

    // Update the staff details
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'office' => 'required|string|max:255',
            'age' => 'required|integer',
            'start_date' => 'required|date',
            'salary' => 'required|numeric',
        ]);

        $staff = Staff::findOrFail($id);
        $staff->update($validated);

        return redirect()->route('staff.index');
    }

    // Delete the staff member
    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();

        return redirect()->route('staff.index');
    }
}
