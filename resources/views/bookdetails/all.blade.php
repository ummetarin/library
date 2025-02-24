<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>All Books</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        @media (min-width: 1440px) {
            .container-custom {
                max-width: 1440px;
                padding: 20px 20px;
            }
        }
        @media (max-width: 810px) {
            .container-custom {
                max-width: 769px;
                padding: 20px 20px;
            }
        }
        @media (max-width: 390px) {
            .container-custom {
                max-width: 520px;
                padding: 20px 20px;
            }
        }
    </style>
</head>
<body class="bg-gray-100">

<!-- Banner Section -->
<section class="bg-[#D2B48C] py-20 text-center text-white">
    <h1 class="text-5xl font-bold">All Books</h1>
    <p class="text-sm mt-2 max-w-2xl mx-auto">Explore a vast collection of books. Browse, buy, or borrow your favorite titles.</p>
</section>

<!-- Search and Books Section -->
<section class="container-custom mx-auto py-10">
    <div class="flex flex-col md:flex-row items-center justify-between mb-8">
        <!-- Search by Category -->
        <form action="{{ route('bookdetails.all') }}" method="GET" class="flex flex-wrap gap-4 items-center">
            <label for="category" class="text-lg font-medium text-gray-700">Search by Category:</label>
            <select name="category" id="category" class="p-2 border border-gray-400 rounded-lg">
                <option value="">All Categories</option>
                @foreach($categories as $category)
                    <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>
                        {{ ucfirst($category) }}
                    </option>
                @endforeach
            </select>
            <button type="submit" class="px-4 py-2 bg-[#D2B48C] hover:bg-[#b8956e] text-white rounded-lg">Search</button>
        </form>
    </div>

    <!-- Books Listing -->
    @if(count($books) == 0)
        <p class="text-center text-gray-600">No books found.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($books as $book)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset($book->image) }}" alt="{{ $book->title }}" 
                     class="w-full h-[280px] object-cover object-center rounded-t-lg">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-[#D2B48C]">{{ $book->title }}</h2>
                    <p class="text-md text-gray-500">{{ $book->author }}</p>
                    <p class="text-md font-medium mt-2">Price: ${{ $book->price }}</p>
                    <div class="flex justify-between mt-4">
                        <a href="{{ route('bookdetails.show', $book->id) }}" 
                           class="px-4 py-2 bg-[#D2B48C] hover:bg-[#b8956e] text-white font-medium rounded-lg">Details</a>
                        <a href="{{ route('bookdetails.buy', $book->id) }}" 
                           class="px-4 py-2 bg-[#D2B48C] hover:bg-[#b8956e] text-white font-medium rounded-lg">Buy</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endif
</section>

</body>
</html>
