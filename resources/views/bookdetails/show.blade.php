<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Book Details</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .button-style {
            display: inline-block;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: 600;
            color: white;
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
        }

        .btn-buy { background: linear-gradient(135deg, #0F766E, #0D9488); }
        .btn-borrow { background: linear-gradient(135deg, #EA580C, #F97316); }
        .btn-back { background: linear-gradient(135deg, #4B5563, #6B7280); }

        .button-style:hover {
            transform: translateY(-3px);
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body class="bg-gray-100">

<!-- Banner Section -->
<section class="bg-gradient-to-r from-teal-600 to-teal-900 py-10 md:py-16 text-center text-white shadow-lg">
    <h1 class="text-3xl md:text-5xl font-bold"> Book Details</h1>
</section>

<!-- Book Details Section -->
<section class="container mx-auto py-8 md:py-12 px-4">
    <div class="max-w-4xl mx-auto glass-card bg-white shadow-lg rounded-xl p-6 md:p-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10 items-center">
            <!-- Book Image -->
            <div class="flex justify-center">
                <img src="{{ asset($book->image) }}" alt="{{ $book->title }}" 
                     class="w-64 md:w-72 h-auto object-cover rounded-xl shadow-md border-2 border-gray-300">
            </div>

            <!-- Book Information -->
            <div class="flex flex-col space-y-2 md:space-y-4">
                <h2 class="text-2xl md:text-4xl font-bold text-teal-700">{{ $book->title }}</h2>
                <p class="text-sm md:text-lg text-gray-700"><strong>Author:</strong> {{ $book->author }}</p>
                <p class="text-sm md:text-lg text-gray-700"><strong>Category:</strong> {{ $book->category }}</p>
                <p class="text-sm md:text-lg text-gray-700"><strong>Price:</strong> <span class="text-teal-700 font-semibold">${{ $book->price }}</span></p>

                @if(isset($book->description))
                    <p class="text-sm md:text-lg text-gray-600"><strong>Description:</strong> {{ $book->description }}</p>
                @endif

                <!-- Buttons -->
                <div class="flex flex-wrap gap-4 mt-4 md:mt-6">
                    <a href="{{ route('bookdetails.buy', $book->id) }}" class="button-style btn-buy text-sm md:text-base">Buy Now</a>
                    <a href="{{ route('bookdetails.all') }}" class="button-style btn-back text-sm md:text-base">Back</a>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
