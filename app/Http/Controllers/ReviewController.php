<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create()
{
    return view('reviews.create'); // Make sure you have this Blade file
}

}
