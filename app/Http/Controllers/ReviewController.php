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
    return view('reviews.create'); 
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'review' => 'required|string',
    ]);
    Review::create([
        'name' => $request->name,
        'email' => $request->email,
        'review' => $request->review,
    ]);

    return back()->with('success', 'Review posted successfully!');
}

public function destroy($id)
{
    $review = Review::findOrFail($id);
    $review->delete();

    return back()->with('success', 'Review deleted successfully!');
}

}


