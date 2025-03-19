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

<!-- banner -->

<div
  class="hero min-h-screen"
  style="background-image: url(https://i.postimg.cc/BZyHDdpc/7994-jpg-wh1200.jpg);">
  <div class="hero-overlay bg-opacity-80"></div>
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-[700px]">
      <h1 class="mb-5 text-5xl text-[#D2B48C] font-bold">Library Managemnet System</h1>
      <p class="mb-5 text-[#D2B48C]">
        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
        quasi. In deleniti eaque aut repudiandae et a id nisi.
      </p>
      <a href="/about"><button class="btn bg-[#D2B48C]">Explore it</button></a>
   
    </div>
  </div>
</div>

<!-- banner -->
<div class="relative bg-[#F5EFE6]  bg-base-200 py-12">
  <div class="relative flex flex-col lg:flex-row items-center max-w-6xl mx-auto gap-10">
    <!-- Image Section with Overlay -->
    <div class="relative w-full lg:w-1/2">
      <div class="absolute inset-0 bg-black/50 rounded-lg"></div>
      <img
        src="https://i.postimg.cc/bYLVx3D7/library-interior-empty-room-reading-with-books-wooden-shelves-33099-1722.avif"
        class="w-full h-[450px] object-cover rounded-lg shadow-2xl" />
    </div>

    <!-- Text Section -->
    <div class="w-full lg:w-1/2 px-6 lg:px-12 text-center lg:text-left">
      <h1 class="text-5xl text-amber-900 font-bold drop-shadow-lg">
        Welcome to Online Library System
      </h1>
      <p class="py-6 text-lg text-amber-900 max-w-lg drop-shadow-lg">
        Explore a world of endless possibilities with our vast collection of books, research materials, and digital resources. Whether you're a student, researcher, or book lover, our library offers a quiet space to learn, discover, and grow.
      </p>
      <a href="/about">   <button class="btn bg-[#D2B48C] hover:bg-[#b99870] text-white px-6 py-3 rounded-lg shadow-lg">
        Explore Now
      </button></a>
   
    </div>
  </div>
</div>

<!-- service -->

<div class="bg-white py-16">
  <div class="max-w-6xl mx-auto text-center px-6">
    <h2 class="text-4xl text-amber-900 font-bold">Our Library Services</h2>
    <p class="text-lg text-amber-900 mt-4 max-w-2xl mx-auto">
      Discover a range of services designed to support your learning and research needs. From digital resources to book borrowing, we make knowledge accessible.
    </p>

    <!-- Service Cards -->
    <div class="grid md:grid-cols-3 gap-8 mt-10">
      @foreach($services as $service)
        <div class="bg-white rounded-lg shadow-lg p-6">
          <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" class="w-full mx-auto mb-4">
          <h3 class="text-2xl text-amber-900 text-left font-semibold">{{ $service->name }}</h3>
          <p class="text-left text-amber-800 mt-2">
            {{ $service->description }}
          </p>
        </div>
      @endforeach
    </div>
  </div>
</div>


<!-- banner -->
<div class="relative bg-[#EFE3D5] py-12">
  <div class="relative flex flex-col lg:flex-row-reverse items-center max-w-6xl mx-auto gap-10">
    
    <!-- Image Section (Now on the Right) -->
    <div class="relative w-full lg:w-1/2">
      <div class="absolute inset-0 bg-black/50 rounded-lg"></div>
      <img
        src="https://i.postimg.cc/jjwCXgSZ/images.jpg"
        class="w-full h-[450px] object-cover rounded-lg shadow-2xl" />
    </div>

    <!-- Text Section (Now on the Left) -->
    <div class="w-full lg:w-1/2 px-6 lg:px-12 text-center lg:text-left">
      <h1 class="text-5xl text-amber-900 font-bold drop-shadow-lg">
        Why Choose Our Library?
      </h1>
      <p class="py-6 text-lg text-amber-900 max-w-lg drop-shadow-lg">
        Our library offers more than just books! Enjoy **24/7 digital access**, personalized recommendations, and expert research assistance. Whether you need a **quiet study space** or the latest **bestsellers**, we provide a welcoming environment for all readers.
      </p>
      <a href="/about"> 
      <button class="btn bg-[#D2B48C] hover:bg-[#b99870] text-white px-6 py-3 rounded-lg shadow-lg">
        Learn More
      </button>
      </a>
    
    </div>

  </div>
</div>


<div class="bg-white py-16 px-6">
  <div class="max-w-5xl mx-auto text-center">
    
    <!-- Section Title -->
    <h1 class="text-4xl text-amber-900 font-bold drop-shadow-lg">
      Join Our Community
    </h1>
    <p class="text-lg text-amber-800 mt-4 max-w-2xl mx-auto">
      Become a part of our vibrant reading community! Participate in book clubs, literary discussions, and special events that connect readers and inspire knowledge sharing.
    </p>

    <!-- Content Wrapper -->
    <div class="mt-10 flex flex-col lg:flex-row items-center gap-[56px]">
      
      <!-- Image -->
      <div class="w-full max-w-[500px] h-[300px] rounded-md   overflow-hidden shadow-xl">
        <img src="https://i.postimg.cc/HkWvxYsg/7a11f5274c6de6f11292725c5a7458a7.jpg" class="w-full h-full object-cover" />
      </div>

      <!-- Text with Card Background -->
      <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg text-amber-900">
        <h3 class="text-2xl font-semibold">Why Join?</h3>
        <ul class="mt-3 text-lg space-y-2">
          <li>📖 Access exclusive book clubs</li>
          <li>🎤 Attend engaging literary events</li>
          <li>💡 Share ideas with fellow readers</li>
          <li>🎁 Enjoy member-only benefits</li>
        </ul>
        <button class="mt-5 btn bg-[#D2B48C] hover:bg-[#b99870] text-white px-6 py-3 rounded-lg shadow-md">
          Register Now
        </button>
      </div>

    </div>
  </div>
</div>










<!-- Footer -->
<footer class="footer footer-center bg-white text-base-content rounded p-10">
  <nav class="grid grid-flow-col gap-4">
    <p class="text-amber-900 hover:text-gray-700"><a href="/">Home</a></p>
    <p class="text-amber-900 hover:text-gray-700"><a href="/about">About</a></p>
    <p class="text-amber-900 hover:text-gray-700"><a href="/dashboard">Dashboard</a></p>
  </nav>
  
  <nav>
    <div class="grid grid-flow-col gap-4">
      <a href="https://facebook.com" target="_blank" class="hover:text-blue-600">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          class="fill-current transition duration-300 hover:fill-blue-600">
          <path
            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
        </svg>
      </a>

      <a href="https://youtube.com" target="_blank" class="hover:text-red-600">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          class="fill-current transition duration-300 hover:fill-red-600">
          <path
            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
        </svg>
      </a>

      <a href="https://twitter.com" target="_blank" class="hover:text-blue-400">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          class="fill-current transition duration-300 hover:fill-blue-400">
          <path
            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
        </svg>
      </a>
    </div>
  </nav>

  <aside>
    <p class="text-amber-800 hover:text-amber-900">Copyright © - All rights reserved by ACME Industries Ltd</p>
  </aside>
</footer>

</body>
</html>
