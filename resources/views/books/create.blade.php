
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Buy Book</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">

  
 

    <section class="max-w-md mx-auto p-6 bg-white shadow-md rounded-lg mt-10">
        <form action="{{ route('books.store') }}" method="POST">
            @csrf

            <!-- Book Title -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium">Book Title</label>
                <input type="text" name="title" placeholder="Book Title" class="p-2 border border-gray-400 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#D2B48C]" required>
            </div>

            <!-- Author Name -->
            <div class="mb-4">
                <label for="author" class="block text-gray-700 font-medium">Author Name</label>
                <input type="text" name="author" placeholder="Author Name" class="p-2 border border-gray-400 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#D2B48C]" required>
            </div>

            <!-- Price -->
            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-medium">Price</label>
                <input type="number" name="price" placeholder="Price" class="p-2 border border-gray-400 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#D2B48C]" required>
            </div>

            <!-- Category -->
            <div class="mb-4">
                <label for="category" class="block text-gray-700 font-medium">Category</label>
                <input type="text" name="category" placeholder="Category" class="p-2 border border-gray-400 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#D2B48C]" required>
            </div>

            <!-- Image -->
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium">Image</label>
                <input type="text" name="image" placeholder="Image URL" class="p-2 border border-gray-400 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#D2B48C]" required>
            </div>

            <!-- Quantity -->
            <div class="mb-4">
                <label for="quantity" class="block text-gray-700 font-medium">Quantity</label>
                <input type="number" name="quantity" placeholder="Quantity" class="p-2 border border-gray-400 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#D2B48C]" required>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="w-full px-4 py-2 bg-[#D2B48C] hover:bg-[#b8956e] text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-[#D2B48C]">Add Book</button>
            </div>
        </form>
    </section>
</body>