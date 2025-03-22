<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index()
    {
        $review = Review::all();
        return view('reviews.index', compact('review'));
    }

    public function create()
{
    return view('reviews.create'); // Make sure you have this Blade file
}

public function store(Request $request)
{
    // Validate input
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'review' => 'required|string',
    ]);

    // Save to database
    Review::create([
        'name' => $request->name,
        'email' => $request->email,
        'review' => $request->review,
    ]);

    // Redirect back with success message
    return back()->with('success', 'Review posted successfully!');
}

public function destroy($id)
{
    $review = Review::findOrFail($id);
    $review->delete();

    return back()->with('success', 'Review deleted successfully!');
}

}


