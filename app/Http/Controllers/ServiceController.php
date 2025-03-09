<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    
    
    public function create()
    {
        return view('services.create'); // Return the form view
    }

    public function store(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|url',
        ]);

        // Store the data
        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
        ]);

        // Redirect with success message
        return redirect()->route('services.create')->with('success', 'Service added successfully!');
    }
    }

