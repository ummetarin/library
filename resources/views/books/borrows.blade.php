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
    <aside class="w-64 bg-[#D2B48C] text-white flex flex-col p-5">
        <h1 class="text-3xl font-bold mb-10">Dashboard</h1>
        <nav class="flex-1 space-y-4">
            <a href="#" class="flex items-center space-x-2 hover:bg-[#b8956e] p-2 rounded-lg">
               
                <span>Dashboard</span>
            </a>
            <a href="{{ route('books.index') }}" class="flex items-center space-x-2 hover:bg-[#b8956e] p-2 rounded-lg">
                <span>📚</span>
                <span>Manage Books</span>
            </a>
            <a href="{{ route('users.index') }}" class="flex items-center space-x-2 bg-[#b8956e] p-2 rounded-lg">
                <span>👥</span>
                <span>All Users</span>
            </a>
            <a href="{{ route('books.sold') }}" class="flex items-center space-x-2 bg-[#b8956e] p-2 rounded-lg">
            <span>📖</span>
          <span>All Sold Books</span>
           </a>
            <a href="{{ route('books.borrows') }}" class="flex items-center space-x-2 bg-[#b8956e] p-2 rounded-lg">
            <span>📖</span>
          <span>All Sold Books</span>
           </a>
           <a href="{{ route('services.index') }}" class="flex items-center space-x-2 bg-[#b8956e] p-2 rounded-lg">
    <span>🛠️</span>
    <span>All Service</span>
</a>

            <a href="#" class="flex items-center space-x-2 hover:bg-[#b8956e] p-2 rounded-lg">
                <span>⚙️</span>
                <span>Settings</span>
            </a>
        </nav>
        <div class="mt-auto">
            <a href="#" class="flex items-center space-x-2 hover:bg-[#b8956e] p-2 rounded-lg">
                <span>🚪</span>
                <span>Logout</span>
            </a>
        </div>
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
    <h3 class="text-2xl font-semibold mb-4 text-[#D2B48C]">All Borrows Books</h3>

    <div class="overflow-x-auto">
        <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-gradient-to-r from-[#D2B48C] to-[#b8956e] text-white text-sm">
                <tr>
                    <th class="py-3 px-3 text-left">#</th>
                    <th class="py-3 px-3 text-left">Book Name</th>
                    <th class="py-3 px-3 text-left">Price</th>
                    <th class="py-3 px-3 text-left">Payment Method</th>
                    <th class="py-3 px-3 text-left">Borrowd At</th>
                    <th class="py-3 px-3 text-left">Button</th>

                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-300 bg-gray-50">
                @foreach($borrowsBooks as $index => $book)
                    <tr class="hover:bg-gray-100 transition">
                        <td class="py-3 px-3 font-medium text-gray-800">{{ $index + 1 }}</td>
                        <td class="py-3 px-3 text-gray-600">{{ $book->title }}</td>
                        <td class="py-3 px-3 text-gray-600">${{ $book->price }}</td>
                        <td class="py-3 px-3 text-gray-600">{{ $book->payment_method }}</td>
                        <td class="py-3 px-3 text-gray-600">{{ $book->borrowed_at }}</td>
                        <td>
    <a href="{{ route('books.return', $book->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-700 transition">
        Return
    </a>
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
