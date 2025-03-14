<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Our Services</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .container-custom {
            max-width: 1280px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body class="bg-gray-50">

<!-- Banner Section -->
<section class="bg-[#D2B48C] py-16 text-center text-white">
    <h1 class="text-5xl font-bold">Our Services</h1>
    <p class="text-lg mt-2 max-w-xl mx-auto">Discover a wide range of services tailored to your needs.</p>
</section>

<!-- Services Section -->
<section class="container-custom py-12">
    @if(!empty($services) && count($services) > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
            @foreach($services as $item)
            <div class="card bg-base-100 w-96 shadow-sm">
  <figure>
    <img
      src="{{ $item->image }}"
      alt="Shoes" />
  </figure>
  <div class="card-body">
    <h2 class="card-title">{{ $item->name }}</h2>
    <p>{{ $item->description }}</p>
    
  </div>
</div>
              
            @endforeach
        </div>
    @else
        <p class="text-center text-gray-600 text-lg">No services found.</p>
    @endif
</section>

</body>
</html>
