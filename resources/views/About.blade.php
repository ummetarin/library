<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
    <title>About Us - Library Management System</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
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
  
    
    <!-- About Us Section -->
    <div class="hero min-h-screen bg-[#EFE3D5]">
        <div class="hero-content flex-col lg:flex-row-reverse max-w-6xl mx-auto">
            <img src="https://i.postimg.cc/SRr7F99z/Essay-on-Library-in-English-e1489995176204.jpg" class="w-full lg:w-1/2 rounded-lg shadow-2xl" />
            <div class="lg:w-1/2 px-6 lg:px-12">
                <h1 class="text-5xl text-amber-900 font-bold">About Our Library</h1>
                <p class="py-6 text-lg text-amber-900">
                    Our Digital Library provides access to thousands of books, research papers, and educational resources. We are committed to creating a knowledge-driven community where everyone can explore and learn with ease.
                </p>
                <p class="text-lg text-amber-900">Join us today and embark on your reading journey!</p>
                <a href="/register" class="btn bg-[#D2B48C] mt-5">Join Now</a>
            </div>
        </div>
    </div>

    <!-- features -->
    <section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-6 lg:px-12 text-center">
        <h2 class="text-4xl font-extrabold text-amber-900 mb-8">Our Library Features</h2>
        <p class="text-lg text-amber-900 mb-12">
            Explore the unique features of our digital library, designed to enhance your reading and research experience.
        </p>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
       
            <!-- Feature 4 -->
            <div class="p-6 bg-white shadow-lg rounded-lg transform transition-all duration-300 hover:scale-105">
                <div class="flex justify-center mb-4">
                    <img src="https://cdn-icons-png.flaticon.com/128/456/456212.png" alt="Bookmark Icon" class="w-16">
                </div>
                <h3 class="text-2xl font-semibold text-amber-900">Personalized Library</h3>
                <p class="mt-3 text-amber-800">
                    Create a personal reading list and bookmark your favorite books for quick access.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="p-6 bg-white shadow-lg rounded-lg transform transition-all duration-300 hover:scale-105">
                <div class="flex justify-center mb-4">
                    <img src="https://cdn-icons-png.flaticon.com/128/2921/2921222.png" alt="Support Icon" class="w-16">
                </div>
                <h3 class="text-2xl font-semibold text-amber-900">24/7 Support</h3>
                <p class="mt-3 text-amber-800">
                    Get assistance anytime with our dedicated customer support team, ready to help.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="p-6 bg-white shadow-lg rounded-lg transform transition-all duration-300 hover:scale-105">
                <div class="flex justify-center mb-4">
                    <img src="https://cdn-icons-png.flaticon.com/128/3135/3135768.png" alt="User Icon" class="w-16">
                </div>
                <h3 class="text-2xl font-semibold text-amber-900">User-Friendly Interface</h3>
                <p class="mt-3 text-amber-800">
                    Enjoy a smooth and intuitive experience while exploring our library platform.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#EFE3D5] py-16">
    <div class="max-w-6xl mx-auto px-6 lg:px-12 text-center">
        <h2 class="text-4xl font-extrabold text-amber-900 mb-8">Why Choose Us?</h2>
        <p class="text-lg text-amber-900 mb-12">
            Discover what makes our digital library the perfect choice for book lovers, researchers, and students.
        </p>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Point 1 -->
            <div class="p-6 bg-white shadow-lg rounded-lg transform transition-all duration-300 hover:scale-105">
                <div class="flex justify-center mb-4">
                    <img src="https://cdn-icons-png.flaticon.com/128/1042/1042610.png" alt="Quality Books Icon" class="w-16">
                </div>
                <h3 class="text-2xl font-semibold text-amber-900">High-Quality Resources</h3>
                <p class="mt-3 text-amber-800">
                    Our library offers carefully curated books and research papers from trusted sources.
                </p>
            </div>

            <!-- Point 2 -->
            <div class="p-6 bg-white shadow-lg rounded-lg transform transition-all duration-300 hover:scale-105">
                <div class="flex justify-center mb-4">
                    <img src="https://cdn-icons-png.flaticon.com/128/2956/2956780.png" alt="Free Access Icon" class="w-16">
                </div>
                <h3 class="text-2xl font-semibold text-amber-900">Free & Affordable Access</h3>
                <p class="mt-3 text-amber-800">
                    Enjoy free reading and budget-friendly premium plans for exclusive content.
                </p>
            </div>

            <!-- Point 3 -->
            <div class="p-6 bg-white shadow-lg rounded-lg transform transition-all duration-300 hover:scale-105">
                <div class="flex justify-center mb-4">
                    <img src="https://cdn-icons-png.flaticon.com/128/4108/4108599.png" alt="User Friendly Icon" class="w-16">
                </div>
                <h3 class="text-2xl font-semibold text-amber-900">Easy-to-Use Platform</h3>
                <p class="mt-3 text-amber-800">
                    A smooth, hassle-free browsing experience designed for all age groups.
                </p>
            </div>
        </div>
    </div>
</section>


    
    <!-- Footer -->
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
