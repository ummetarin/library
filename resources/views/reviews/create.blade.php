<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
    <title>Give a Review</title>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(to right, #f5f5f5, #e3dac9);
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        
        .button-style {
            transition: all 0.3s ease-in-out;
        }

        .button-style:hover {
            transform: translateY(-3px);
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<!-- nav -->
<div class="navbar bg-base-100">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <ul
        tabindex="0"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
        <li class="text-amber-900 hover:text-gray-700"><a href="/">Home</a></li>
      <li class="text-amber-900 hover:text-gray-700"><a href="/about">About</a></li>
      <li class="text-amber-900 hover:text-gray-700"><a href="{{ route('bookdetails.all') }}">All Books</a></li>      
      <li class="text-amber-900 hover:text-gray-700"><a href="/dashboard">Dashboard</a></li>      

      <li class="text-amber-900 hover:text-gray-700">
      <a href="{{ route('services.all') }}">All Service</a>
     </li>
      </ul>
    </div>
    <div class="flex flex-row items-center">
      <img class="w-[70px] h-[60px]" src="https://i.postimg.cc/8Ptf193V/pngtree-hand-drawn-cartoon-polygon-library-bookshelf-illustration-png-image-2190375-removebg-preview.png" alt="">
      <h1 class="text-md text-amber-900  font-bold">Digital Library</h1>
    </div>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li class="text-amber-900 hover:text-gray-700"><a href="/">Home</a></li>
      <li class="text-amber-900 hover:text-gray-700"><a href="/about">About</a></li>
      <li class="text-amber-900 hover:text-gray-700"><a href="{{ route('bookdetails.all') }}">All Books</a></li>      
      <li class="text-amber-900 hover:text-gray-700"><a href="/dashboard">Dashboard</a></li>      

      <li class="text-amber-900 hover:text-gray-700">
      <a href="{{ route('services.all') }}">All Service</a>
     </li>

    </ul>
  </div>
  <div class="navbar-end">
  <a class="btn bg-[#D2B48C]" href="{{ route('login') }}">Login</a>
  <a class="btn bg-[#D2B48C]" href="{{ route('register') }}">Registration</a>
  </div>
</div>


<!-- Review Form -->
<div class="flex items-center bg-white justify-center min-h-screen px-6">
    <div class="glass-card max-w-lg w-full">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">⭐ Give a Review</h2>

        <form action="{{ route('reviews.store') }}" method="POST">
            @csrf

            <!-- Name (Auto-filled) -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium">Your Name</label>
                <input type="text" name="name" value="{{ auth()->user()->name }}" readonly class="p-2 border border-gray-400 rounded-lg w-full bg-gray-100 focus:outline-none">
            </div>

            <!-- Email (Auto-filled) -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium">Your Email</label>
                <input type="email" name="email" value="{{ auth()->user()->email }}" readonly class="p-2 border border-gray-400 rounded-lg w-full bg-gray-100 focus:outline-none">
            </div>


            <!-- Review Box -->
            <div class="mb-4">
                <label for="review" class="block text-gray-700 font-medium">Your Review</label>
                <textarea name="review" placeholder="Write your review here..." rows="4" class="p-2 border border-gray-400 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#D2B48C]" required></textarea>
            </div>

            <!-- Post Review Button -->
            <div class="flex justify-center">
                <button type="submit" class="button-style px-6 py-3 bg-[#D2B48C] rounded-md text-white hover:scale-105 hover:shadow-lg">
                     Post Review
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
