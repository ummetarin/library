<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>My Books</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">

<div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-[#D2B48C] text-white flex flex-col p-5">
        <h1 class="text-3xl font-bold mb-10">Dashboard</h1>
        <nav class="flex-1 space-y-4">
            <a href="{{ route('books.index') }}" class="flex items-center space-x-2 hover:bg-[#b8956e] p-2 rounded-lg">
                <span>📚</span>
                <span>Manage Books</span>
            </a>
            <a href="{{ route('books.myBooks') }}" class="flex items-center space-x-2 hover:bg-[#b8956e] p-2 rounded-lg">
                <span>🛠️</span>
                <span>My Books</span>
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- My Books Content -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h3 class="text-2xl font-semibold mb-4">My Books</h3>
            
            @if ($books->isEmpty())
                <p>No books found.</p>
            @else
                <ul class="space-y-4">
                    @foreach ($books as $book)
                        <li class="p-4 border-b">
                            <h4 class="text-xl font-semibold">{{ $book->title }}</h4>
                            <p>Author: {{ $book->author }}</p>
                            <p>Price: ${{ $book->price }}</p>
                            <p>Category: {{ $book->category }}</p>
                            <p>Quantity: {{ $book->quantity }}</p>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </main>
</div>

</body>
</html>
