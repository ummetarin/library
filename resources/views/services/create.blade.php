<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Add Service</title>
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
           <a href="{{ route('services.index') }}" class="flex items-center space-x-2 bg-[#b8956e] p-2 rounded-lg">
    <span>🛠️</span>
    <span>All Service</span>
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
    <main class="flex-1 flex items-center justify-center p-10">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-lg w-full">

        @if (session('success'))
        <div class="bg-green-100 text-green-800 p-4 mb-4 rounded-lg text-center">
            {{ session('success') }}
        </div>
    @endif

            <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">Add New Service</h2>
            <form action="{{ route('services.store') }}" method="POST">
                @csrf
               
                <!-- Service Name -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium">Service Name</label>
                    <input type="text" name="name" placeholder="Enter Service Name" class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#D2B48C]" required>
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-medium">Description</label>
                    <textarea name="description" placeholder="Describe the service" class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#D2B48C]" rows="4" required></textarea>
                </div>

                <!-- Image -->
                <div class="mb-4">
                    <label for="image" class="block text-gray-700 font-medium">Image URL</label>
                    <input type="text" name="image" placeholder="Enter Image URL" class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#D2B48C]" required>
                </div>

                <!-- Submit Button -->
                <div class="mt-6">
                    <button type="submit" class="w-full px-4 py-3 bg-[#D2B48C] text-white font-semibold rounded-lg hover:bg-[#b8956e] transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-[#D2B48C]">
                        Add Service
                    </button>
                </div>
            </form>
        </div>
    </main>
</div>

</body>
</html>
