<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::latest()->take(3)->get(); 
        return view('home', compact('services'));
    }
}
