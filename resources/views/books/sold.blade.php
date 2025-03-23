<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>My_books</title>
</head>
<body class="bg-gray-100">

<div class="flex h-screen">
@php
    $isAdmin = auth()->user() && auth()->user()->isAdmin();
    @endphp


    
<!-- Sidebar -->
<aside class="w-64 bg-[#D2B48C] text-white flex flex-col p-5">
  
    <nav class="flex-1 space-y-4">
    <a href="/dashboard" class="flex text-3xl font-bold items-center space-x-2  p-3 rounded-lg">
        <span>Dashboard</span>
    </a>

          <!-- n -->

          @if ($isAdmin)

          <a href="{{ route('books.index') }}" class="flex items-center space-x-2 hover:bg-[#b8956e] p-3 rounded-lg">
        <span>📚</span>
        <span>Manage Books</span>
    </a>
    <a href="{{ route('users.index') }}" class="flex hover:bg-[#b8956e] items-center space-x-2  p-3 rounded-lg">
        <span>👥</span>
        <span>All Users</span>
    </a>
    <a href="{{ route('books.sold') }}" class="flex items-center space-x-2 bg-[#b8956e] p-3 rounded-lg">
        <span>📖</span>
        <span>All Sold Books</span>
    </a>
    <a href="{{ route('books.borrows') }}" class="flex items-center space-x-2 hover:bg-[#b8956e] p-3 rounded-lg">
        <span>📖</span>
        <span>All Borrowed Books</span>
    </a>
    <a href="{{ route('reviews.index') }}" class="flex items-center space-x-2 hover:bg-[#b8956e] p-3 rounded-lg">
        <span>📖</span>
        <span>All Reviews</span>
    </a>
        @else
         <!-- Show user-related links -->
        <a href="{{ route('books.my_books') }}" class="flex items-center space-x-2 hover:bg-[#b8956e] p-3 rounded-lg">
                <span>📖</span>
                <span>My Borrowed Books</span>
            </a>
        <a class="flex items-center space-x-2 rounded-lg" href="{{ route('reviews.create') }}">
            <button class="bg-white text-black font-bold rounded-md p-3 hover:bg-black hover:text-white ">Give a Review</button>
        </a>
         @endif

       

       
    </nav>

    <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="flex items-center space-x-2 hover:bg-[#b8956e] p-2 rounded-lg w-full text-left">
        <span>🚪</span>
        <span>Logout</span>
    </button>
    </form>

    
    </aside>
    <!-- Main Content -->
    <main class="flex-1 p-8">
        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Dashboard Content -->
       
        <div class="bg-white shadow-lg rounded-lg p-6">
    <h3 class="text-2xl font-semibold mb-4 text-[#D2B48C]">All Sold Books</h3>

    <div class="overflow-x-auto">
        <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-gradient-to-r from-[#D2B48C] to-[#b8956e] text-white text-sm">
                <tr>
                    <th class="py-3 px-3 text-left">#</th>
                    <th class="py-3 px-3 text-left">Book Name</th>
                    <th class="py-3 px-3 text-left">Price</th>
                    <th class="py-3 px-3 text-left">Payment Method</th>
                    <th class="py-3 px-3 text-left">Purchased At</th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-300 bg-gray-50">
                @foreach($soldBooks as $index => $book)
                    <tr class="hover:bg-gray-100 transition">
                        <td class="py-3 px-3 font-medium text-gray-800">{{ $index + 1 }}</td>
                        <td class="py-3 px-3 text-gray-600">{{ $book->title }}</td>
                        <td class="py-3 px-3 text-gray-600">${{ $book->price }}</td>
                        <td class="py-3 px-3 text-gray-600">{{ $book->payment_method }}</td>
                        <td class="py-3 px-3 text-gray-600">{{ $book->purchased_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

    </main>
</div>

</body>
</html>
