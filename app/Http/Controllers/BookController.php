<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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




public function buy($id) {
    $book = Book::findOrFail($id);
    return view('bookdetails.buy', compact('book'));
}

public function purchase(Request $request, $id) {
    $request->validate([
        'confirm' => 'required',
        'payment_method' => 'required'
    ]);

    $book = Book::findOrFail($id);

    if ($book->quantity > 0) {

        $book->quantity -= 1;
        $book->save();

       
        DB::table('purchased_books')->insert([
            'book_id' => $book->id,
            'title' => $book->title,
            'price' => $book->price,
            'payment_method' => $request->payment_method,
            'purchased_at' => now()
        ]);

        return redirect()->route('bookdetails.all')->with('success', 'Book purchased successfully!');
    } else {
        return redirect()->route('bookdetails.all')->with('error', 'Sorry, this book is out of stock!');
    }
}


public function soldBooks()
{
    $soldBooks = DB::table('purchased_books')->get();
    return view('books.sold', compact('soldBooks'));
}
public function borrowsBooks()
{
    $borrowsBooks = DB::table('borrowed_items')->get();
    return view('books.borrows', compact('borrowsBooks'));
}

public function borrow($id) {
    $book = Book::findOrFail($id);
    return view('bookdetails.borrow', compact('book'));
}

public function processBorrow(Request $request, $id) {
    $request->validate([
        'return_date' => 'required|date',
        'confirm' => 'required',
        'payment_method' => 'required'
    ]);

    $book = Book::findOrFail($id);

    if ($book->quantity > 0) {
        $book->quantity -= 1;
        $book->save();

        DB::table('borrowed_items')->insert([
            'user_id' => Auth::id(),  
            'book_id' => $book->id,
            'title' => $book->title,
            'price' => $book->price,
            'payment_method' => $request->payment_method,
            'borrowed_at' => now(),
            'return_date' => $request->return_date,
            'created_at' => now(),  // ✅ Ensure timestamps are set
            'updated_at' => now(),
        ]);

        return redirect()->route('bookdetails.all')->with('success', 'Book borrowed successfully!');
    } else {
        return back()->with('error', 'Sorry, this book is currently out of stock.');
    }
}


// return

public function showReturnForm($id)
{
    $book = DB::table('borrowed_items')->where('id', $id)->first();

    if (!$book) {
        return redirect()->route('books.borrows')->with('error', 'Book not found.');
    }

    $borrowedAt = strtotime($book->borrowed_at);
    $currentDate = strtotime(now());
    $daysBorrowed = ($currentDate - $borrowedAt) / (60 * 60 * 24);

    if ($daysBorrowed <= 10) {
        $refundAmount = $book->price * 0.6;
    } elseif ($daysBorrowed <= 20) {
        $refundAmount = $book->price * 0.5;
    } elseif ($daysBorrowed <= 30) {
        $refundAmount = $book->price * 0.4;
    } else {
        $refundAmount = 0;
    }

    return view('books.return', compact('book', 'refundAmount'));
}


public function processReturn(Request $request, $id)
{
    $book = DB::table('borrowed_items')->where('id', $id)->first();

    if (!$book) {
        return redirect()->route('books.borrows')->with('error', 'Book not found.');
    }

    $borrowedAt = strtotime($book->borrowed_at);
    $currentDate = strtotime(now());
    $daysBorrowed = ($currentDate - $borrowedAt) / (60 * 60 * 24);

    if ($daysBorrowed > 30) {
        return redirect()->route('books.borrows')->with('error', 'You cannot return this book after 30 days.');
    }

    $bookModel = Book::find($book->book_id);
    if ($bookModel) {
        $bookModel->increment('quantity'); 
    }

    // Delete the record from borrowed_items table
    DB::table('borrowed_items')->where('id', $id)->delete();

    return redirect()->route('books.borrows')->with('success', 'Book returned successfully!');
}

// my_book

public function myBooks()
{
    $myBooks = DB::table('borrowed_items')->where('user_id', Auth::id())->get();
    return view('users.my_books', compact('myBooks'));
}


   

}