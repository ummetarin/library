<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>All User</title>
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

          <a href="{{ route('books.index') }}" class="flex items-center space-x-2 hover:bg-[#b8956e] p-3 rounded-lg">
        <span>📚</span>
        <span>Manage Books</span>
    </a>
    <a href="{{ route('users.index') }}" class="flex items-center space-x-2 bg-[#b8956e] p-3 rounded-lg">
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
        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow-lg rounded-lg p-6">
            <h3 class="text-2xl font-semibold mb-4 text-[#D2B48C]">All Users</h3>

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
                    <thead class="bg-gradient-to-r from-[#D2B48C] to-[#b8956e] text-white text-sm">
                        <tr>
                            <th class="py-3 px-3 text-left">User Name</th>
                            <th class="py-3 px-3 text-left">Email</th>
                            <th class="py-3 px-3 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-gray-300 bg-gray-50">
    @foreach($users as $user)
    <tr class="hover:bg-gray-100 transition">
        <td class="py-3 px-3 font-medium text-gray-800">{{ $user->name }}</td>
        <td class="py-3 px-3 text-gray-600">{{ $user->email }}</td>
        <td class="py-3 px-3 flex justify-center space-x-2">
            <!-- Make Admin Button -->
            <form action="{{ route('users.makeAdmin', $user->id) }}" method="POST">
                @csrf
                <button type="submit"
                    class="px-3 py-1 text-white text-xs font-medium rounded-md shadow-md transition duration-300
                        {{ $user->isAdmin() ? 'bg-gray-400 cursor-not-allowed' : 'bg-blue-500 hover:bg-blue-600' }}"
                    {{ $user->isAdmin() ? 'disabled' : '' }}>
                    {{ $user->isAdmin() ? 'Admin' : 'Make Admin' }}
                </button>
            </form>

            <!-- Delete User Button -->
            <form action="{{ route('users.delete', $user->id) }}" method="POST">
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
