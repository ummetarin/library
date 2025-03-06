<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=YOUR_PAYPAL_CLIENT_ID"></script>
    <title>Buy Book</title>
</head>
<body class="bg-gray-100">

<section class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-lg mt-10">
    <h1 class="text-3xl font-bold text-teal-700 mb-6">Buy Book</h1>

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

        <!-- Confirmation -->
        <div class="mb-6">
            <label class="block text-gray-700 font-medium">Confirm Purchase:</label>
            <input type="checkbox" name="confirm" required class="mt-2">
        </div>

        <!-- Payment Method -->
        <div class="mb-6">
            <label class="block text-gray-700 font-medium mb-2">Select Payment Method:</label>
            <select name="payment_method" class="p-2 border border-gray-400 rounded-lg w-full" required id="payment_method" onchange="togglePaypalButton()">
                <option value="paypal">PayPal</option>
            </select>
        </div>

        <!-- PayPal Button (hidden by default) -->
        <div id="paypal-button-container" class="mb-6 hidden">
            <!-- PayPal Button will be inserted here -->
        </div>

        <!-- Submit Button -->
        <button type="submit" id="confirm-btn" class="px-6 py-2 bg-green-600 hover:bg-green-800 text-white rounded-lg">
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
