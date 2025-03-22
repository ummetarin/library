<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
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

   <div class="flex items-center justify-center py-20">
   <div class="bg-white shadow-md rounded-lg p-6 w-96">
        <h3 class="text-2xl font-semibold mb-4 text-[#D2B48C] text-center">Return Book</h3>

        <form method="POST" action="{{ route('books.return', $book->id) }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Book Name:</label>
                <input type="text" value="{{ $book->title }}" disabled class="border p-2 w-full rounded bg-gray-200">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Borrowed Date:</label>
                <input type="text" value="{{ $book->borrowed_at }}" disabled class="border p-2 w-full rounded bg-gray-200">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Book Price:</label>
                <input type="text" value="${{ $book->price }}" disabled class="border p-2 w-full rounded bg-gray-200">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Refund Amount:</label>
                <input type="text" value="${{ $refundAmount }}" disabled class="border p-2 w-full rounded bg-green-100 text-green-600 font-bold">
            </div>

            <div class="mb-4 text-red-500 text-center">
                @if($refundAmount == 0)
                    <p>You can't return this book after 30 days.</p>
                @endif
            </div>

            <button type="submit" class="w-full bg-[#D2B48C] text-white px-4 py-2 rounded-lg hover:bg-[#b8956e] focus:outline-none focus:ring-2 focus:ring-[#D2B48C]" 
                {{ $refundAmount == 0 ? 'disabled' : '' }}>
                Confirm Return
            </button>
        </form>
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
