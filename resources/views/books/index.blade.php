<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>All Book</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">

<div class="flex h-screen">
    <!-- Sidebar -->
    @php
    $isAdmin = auth()->user() && auth()->user()->isAdmin();
    @endphp



    
<!-- Sidebar -->
<aside class="w-64 bg-[#D2B48C] text-white flex flex-col p-5">
  
    <nav class="flex-1 space-y-4">
    <a href="/dashboard" class="flex text-3xl font-bold items-center space-x-2 hover:bg-[#b8956e] p-3 rounded-lg">
        <span>Dashboard</span>
    </a>

          <!-- n -->

          @if ($isAdmin)

          <a href="{{ route('books.index') }}" class="flex items-center space-x-2 bg-[#b8956e] p-3 rounded-lg">
        <span>📚</span>
        <span>Manage Books</span>
    </a>
    <a href="{{ route('users.index') }}" class="flex items-center space-x-2 hover:bg-[#b8956e] p-3 rounded-lg">
        <span>👥</span>
        <span>All Users</span>
    </a>
    <a href="{{ route('books.sold') }}" class="flex items-center space-x-2 hover:bg-[#b8956e] p-3 rounded-lg">
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
    <a href="{{ route('services.index') }}" class="flex items-center space-x-2 hover:bg-[#b8956e] p-2 rounded-lg">
    <span>🛠️</span>
    <span>All Service</span>
    </a>
    <a href="{{ route('books.my_books') }}" class="flex items-center space-x-2 hover:bg-[#b8956e] p-3 rounded-lg">
                <span>📖</span>
                <span>My Borrowed Books</span>
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

    

        <!-- Manage Books Content -->
        <div>
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-[#D2B48C]">All Books</h1>
                <a href="{{ route('books.create') }}" 
                   class="px-5 py-2 bg-[#D2B48C] text-white font-medium rounded-lg shadow-md hover:bg-[#b8956e] transition duration-300">
                  Add New Book
                </a>
            </div>

            <!-- Responsive Table Container -->
            <div class="overflow-x-auto bg-white p-6 rounded-xl shadow-lg">
                <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
                    <thead class="bg-gradient-to-r from-[#D2B48C] to-[#b8956e] text-white text-sm">
                        <tr>
                            <th class="py-3 px-3 text-left">Image</th>
                            <th class="py-3 px-3 text-left">Title</th>
                            <th class="py-3 px-3 text-left">Author</th>
                            <th class="py-3 px-3 text-left">Category</th>
                            <th class="py-3 px-3 text-left">Price</th>
                            <th class="py-3 px-3 text-left">Quantity</th>
                            <th class="py-3 px-3 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-gray-300 bg-gray-50">
                        @foreach($books as $book)
                        <tr class="hover:bg-gray-100 transition">
                            <td class="py-3 px-3">
                                <img src="{{ $book->image }}" alt="Book Image" 
                                     class="w-[40px] h-[50px] object-cover rounded-md border border-gray-300 shadow-sm">
                            </td>
                            <td class="py-3 px-3 font-medium text-gray-800">{{ $book->title }}</td>
                            <td class="py-3 px-3 text-gray-600">{{ $book->author }}</td>
                            <td class="py-3 px-3 text-gray-600">{{ $book->category }}</td>
                            <td class="py-3 px-3 text-gray-600 font-semibold"k>${{ $book->price }}</td>
                            <td class="py-3 px-3 text-gray-500">{{ $book->quantity }}</td>
                            <td class="py-3 px-3 flex justify-center space-x-2">
                                <a href="{{ route('books.edit', $book->id) }}" 
                                   class="px-3 py-1 bg-[#D2B48C] text-white text-xs font-medium rounded-md shadow-md hover:bg-[#b8956e] transition duration-300">
                                   Edit
                                </a>
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="px-3 py-1 bg-red-500 text-white text-xs font-medium rounded-md shadow-md hover:bg-red-600 transition duration-300">
                                        Delete
                                    </button>
                                </form>
                            </td>
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
