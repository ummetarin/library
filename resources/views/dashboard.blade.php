<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Dashboard</title>
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
    <a href="/dashboard" class="flex text-3xl font-bold items-center space-x-2 bg-[#b8956e] p-3 rounded-lg">
        <span>Dashboard</span>
    </a>

          <!-- n -->

          @if ($isAdmin)

          <a href="{{ route('books.index') }}" class="flex items-center space-x-2 hover:bg-[#b8956e] p-3 rounded-lg">
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
      
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h3 class="text-2xl font-semibold mb-4">Welcome Back!</h3>
            <p>You are Loged In</p>
        </div>
        <div class="flex justify-center mt-6">
    
</div>

    </main>

    
</div>

</body>
</html>
