<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Buy Book</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">

<!-- Banner Section -->
<section class="bg-[#D2B48C] py-20 text-center text-white">
    <h1 class="text-5xl font-bold">Buy Book</h1>
    <p class="text-sm mt-2 max-w-2xl mx-auto">Purchase your favorite books easily and securely.</p>
</section>

<section class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-lg mt-10">
    <h1 class="text-3xl font-bold text-[#D2B48C] mb-6">Buy Book</h1>

    <form action="{{ route('bookdetails.purchase', $book->id) }}" method="POST">
        @csrf

        <!-- Book Details -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium">Book Name:</label>
            <p class="text-lg font-semibold">{{ $book->title }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium">Price:</label>
            <p class="text-lg font-semibold">${{ $book->price }}</p>
        </div>

        <!-- Borrow Time Selection -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Select Borrow Time:</label>
            <select name="borrow_time" class="p-2 border border-gray-400 rounded-lg w-full" required>
                <option value="1-7">1-7</option>
                <option value="7-10">7-10</option>
                <option value="10-16">10-16</option>
            </select>
        </div>

        <!-- Confirmation -->
        <div class="mb-6">
            <label class="block text-gray-700 font-medium">Are you sure you want to add this to your cart?</label>
            <input type="checkbox" name="confirm" required class="mt-2">
        </div>

        <!-- Payment Method (Shown after confirmation) -->
        <div id="payment-section" class="hidden mb-6">
            <label class="block text-gray-700 font-medium mb-2">Select Payment Method:</label>
            <select name="payment_method" class="p-2 border border-gray-400 rounded-lg w-full">
                <option value="bkash">Bkash</option>
                <option value="cash_on_delivery">Cash on Delivery</option>
            </select>
        </div>

        <!-- Penalty Information -->
        <div class="mb-4 text-red-600 font-medium">
            * Late returns will incur a penalty of $20 per day.
        </div>

        <!-- Submit Button -->
        <button type="submit" class="px-6 py-2 bg-[#D2B48C] hover:bg-[#b8956e] text-white rounded-lg">
            Confirm and Borrow
        </button>
    </form>
</section>

<script>
    // Show payment method after confirmation
    const confirmCheckbox = document.querySelector('input[name="confirm"]');
    const paymentSection = document.getElementById('payment-section');

    confirmCheckbox.addEventListener('change', function() {
        if (this.checked) {
            paymentSection.classList.remove('hidden');
        } else {
            paymentSection.classList.add('hidden');
        }
    });
</script>

</body>
</html>
