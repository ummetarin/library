<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all(); // Fetch all services
        return view('services.index', compact('services'));
    }
    
  
    public function create()
    {
        return view('services.create'); // Return the form view
    }

    public function store(Request $request)
{
    // Validate incoming data
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'required',
    ]);

    // Store the data correctly
    Service::create([
        'name' => $request->name,
        'description' => $request->description,
        'image' => $request->image,
    ]);

    // Redirect with success message
    return redirect()->route('services.index')->with('success', 'Service added successfully!');
}

public function edit($id)
{
    $service = Service::findOrFail($id);
    return view('services.edit', compact('service'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'required',
    ]);

    $service = Service::findOrFail($id);
    $service->update([
        'name' => $request->name,
        'description' => $request->description,
        'image' => $request->image,
    ]);

    return redirect()->route('services.index')->with('success', 'Service updated successfully!');
}
public function destroy($id)
{
    $service = Service::findOrFail($id);
    $service->delete();

    return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
}



    }

