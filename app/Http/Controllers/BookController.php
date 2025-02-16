<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class Bookcontroller extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'price' => 'required',
            'category' => 'required',
            'image' => 'required',
            'quantity' => 'required|integer'
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Book added successfully!');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
           'title' => 'required',
            'author' => 'required',
            'price' => 'required',
            'category' => 'required',
            'image' => 'required',
            'quantity' => 'required|integer'
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Book updated successfully!');
    }

    public function destroy($id)
    {
        Book::destroy($id);
        return redirect()->route('books.index')->with('success', 'Book deleted successfully!');
    }

    public function allBooks(Request $request)
{
    $query = Book::query();
    
    // Get distinct categories for the dropdown
    $categories = Book::select('category')->distinct()->pluck('category');

    // Check if a category filter is applied
    if ($request->has('category') && !empty($request->category)) {
        $query->where('category', $request->category);
    }

    $books = $query->get();
    
    return view('bookdetails.all', compact('books', 'categories'));
}

    public function show($id)
{
    $book = Book::findOrFail($id);
    return view('bookdetails.show', compact('book')); // Create 'show.blade.php' for details page
}

public function buy($id)
{
    $book = Book::findOrFail($id);
    return view('bookdetails.buy', compact('book')); // Create 'buy.blade.php' for purchase
}

public function borrow($id)
{
    $book = Book::findOrFail($id);
    return view('bookdetails.borrow', compact('book')); // Create 'borrow.blade.php' for borrowing
}



   

}