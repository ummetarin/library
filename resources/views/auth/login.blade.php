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
        <li><a>Home</a></li>
        <li><a href="{{ route('bookdetails.all') }}">All Books</a></li>
        <li><a>All Service</a></li>
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
      <li class="text-amber-900 hover:text-gray-700"><a href="{{ route('bookdetails.all') }}">All Books</a></li>
      <li class="text-amber-900 hover:text-gray-700"><a>All Service</a></li>
    </ul>
  </div>
  <div class="navbar-end">
  <a class="btn bg-[#D2B48C]" href="{{ route('login') }}">Login</a>
  <a class="btn bg-[#D2B48C]" href="{{ route('register') }}">Registration</a>
  </div>
</div>

<!-- Banner Section -->
<section class="bg-[#D2B48C] py-12 text-center text-white">
    <h1 class="text-5xl font-bold">Login</h1>
</section>

<!-- Login Form Section -->
<section class="max-w-md mx-auto p-6 bg-white shadow-md rounded-lg mt-10">


    <form action="{{ route('login.post') }}" method="POST">
        @csrf

        <!-- Email Address -->
        <div class="mb-4">
            <label for="email_address" class="block text-gray-700 font-medium">E-Mail Address</label>
            <input type="text" id="email_address" name="email" class="p-2 border border-gray-400 rounded-lg w-full" required autofocus>
            @if ($errors->has('email'))
                <span class="text-red-600 text-sm">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-gray-700 font-medium">Password</label>
            <input type="password" id="password" name="password" class="p-2 border border-gray-400 rounded-lg w-full" required>
            @if ($errors->has('password'))
                <span class="text-red-600 text-sm">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <!-- Remember Me -->
        <div class="mb-4 flex items-center">
            <input type="checkbox" name="remember" id="remember" class="mr-2">
            <label for="remember" class="text-gray-700">Remember Me</label>
        </div>

    

        <!-- Submit Button -->
        <div>
            <button type="submit" class="w-full px-4 py-2 bg-[#D2B48C] hover:bg-[#b8956e] text-white rounded-lg">Login</button>
        </div>
    </form>
</section>

</body>
</html>
