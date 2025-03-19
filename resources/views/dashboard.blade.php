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
            <a href="{{ route('books.sold') }}" >
            <span>📖</span>
          <span>All Sold Books</span>
           </a>

    
    <a href="" class="flex items-center space-x-2 bg-[#b8956e] p-2 rounded-lg">
    <span>🛠️</span>
    <span>My Books</span>
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
            <h3 class="text-2xl font-semibold mb-4">Welcome Back!</h3>
            <p>You are Logged In</p>
        </div>
    </main>
</div>

</body>
</html>
