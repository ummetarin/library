<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Libary managemnet system</title>
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
<body class="">

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
