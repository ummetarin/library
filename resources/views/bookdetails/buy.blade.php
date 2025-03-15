<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script> <title>Book Details</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
    
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.3);
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

        .btn-buy { background: #8B4513; }
        .btn-back { background: #D2B48C; }

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
<!-- buy book -->

<section class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-lg mt-10">
    <h1 class="text-3xl font-bold text-[#D2B48C] mb-6">Buy Book</h1>

    <form action="{{ route('bookdetails.purchase', $book->id) }}" method="POST">
        @csrf

        <!-- Book Details -->
        <div class="mb-4">
            <label class="block [#D2B48C] font-medium">Book Name:</label>
            <p class="text-lg font-semibold">{{ $book->title }}</p>
        </div>

        <div class="mb-4">
            <label class="block [#D2B48C] font-medium">Price:</label>
            <p class="text-lg font-semibold">${{ $book->price }}</p>
        </div>

        <!-- Confirmation -->
        <div class="mb-6">
            <label class="block text-[#D2B48C] font-medium">Confirm Purchase:</label>
            <input type="checkbox" name="confirm" required class="mt-2">
        </div>

        <!-- Payment Method -->
        <div class="mb-6">
            <label class="block [#D2B48C] font-medium mb-2">Select Payment Method:</label>
            <select name="payment_method" class="p-2 border border-gray-400 rounded-lg w-full" required id="payment_method" onchange="togglePaypalButton()">
                <option value="paypal">PayPal</option>
            </select>
        </div>

        <!-- PayPal Button (hidden by default) -->
        <div id="paypal-button-container" class="mb-6 hidden">
            <!-- PayPal Button will be inserted here -->
        </div>

        <!-- Submit Button -->
        <button type="submit" id="confirm-btn" class="px-6 py-2 bg-[#D2B48C]  hover:text-black text-white rounded-lg">
            Confirm and Buy
        </button>
    </form>
</section>

<script>
    // Function to show PayPal button when PayPal is selected
    function togglePaypalButton() {
        const paymentMethod = document.getElementById('payment_method').value;
        const paypalButtonContainer = document.getElementById('paypal-button-container');
        const confirmBtn = document.getElementById('confirm-btn');

        if (paymentMethod === 'paypal') {
            paypalButtonContainer.classList.remove('hidden');
            confirmBtn.classList.add('hidden'); // Hide regular submit button
            // Create PayPal button dynamically
            paypal.Buttons({
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: "{{ $book->price }}"
                            }
                        }]
                    });
                },
                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(details) {
                        // Handle successful payment
                        alert('Transaction completed by ' + details.payer.name.given_name);
                        // You can also submit the form here if needed
                        document.querySelector('form').submit();
                    });
                },
                onError: function(err) {
                    alert('An error occurred: ' + err);
                }
            }).render('#paypal-button-container'); // Renders PayPal button
        } else {
            paypalButtonContainer.classList.add('hidden');
            confirmBtn.classList.remove('hidden'); // Show regular submit button
        }
    }
</script>

</body>
</html>
