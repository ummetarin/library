<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Update Service</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">

    <section class="max-w-md mx-auto p-6 bg-white shadow-md rounded-lg mt-10">
        <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Service Name -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium">Service Name</label>
                <input type="text" name="name" value="{{ $service->name }}" class="p-2 border border-gray-400 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#D2B48C]" required>
            </div>

            <!-- Service Description -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium">Service Description</label>
                <textarea name="description" class="p-2 border border-gray-400 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#D2B48C]" required>{{ $service->description }}</textarea>
            </div>

            <!-- Service Image -->
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium">Service Image URL</label>
                <input type="text" name="image" value="{{ $service->image }}" class="p-2 border border-gray-400 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#D2B48C]" required>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="w-full px-4 py-2 bg-[#D2B48C] hover:bg-[#b8956e] text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-[#D2B48C]">Update Service</button>
            </div>
        </form>
    </section>

</body>
</html>
