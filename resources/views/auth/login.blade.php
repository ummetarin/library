<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Login</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">

<!-- Banner Section -->
<section class="bg-[#D2B48C] py-20 text-center text-white">
    <h1 class="text-5xl font-bold">Login</h1>
    <p class="text-sm mt-2 max-w-2xl mx-auto">Access your account to manage your books and purchases.</p>
</section>

<!-- Login Form Section -->
<section class="max-w-md mx-auto p-6 bg-white shadow-md rounded-lg mt-10">
    <h2 class="text-3xl font-bold text-[#D2B48C] mb-6 text-center">Login</h2>

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
