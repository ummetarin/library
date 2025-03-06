@section('content')
    <div class="max-w-6xl mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-3xl font-bold text-amber-900 mb-6 text-center">All Books</h2>
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-[#D2B48C] text-white">
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Author</th>
                        <th class="px-4 py-2">Price</th>
                        <th class="px-4 py-2">Category</th>
                        <th class="px-4 py-2">Image</th>
                        <th class="px-4 py-2">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="px-4 py-2 text-center text-gray-700">{{ $book->title }}</td>
                            <td class="px-4 py-2 text-center text-gray-700">{{ $book->author }}</td>
                            <td class="px-4 py-2 text-center text-gray-700">${{ $book->price }}</td>
                            <td class="px-4 py-2 text-center text-gray-700">{{ $book->category }}</td>
                            <td class="px-4 py-2 text-center"><img src="{{ asset($book->image) }}" class="w-12 h-12 object-cover mx-auto" alt="Book Image"></td>
                            <td class="px-4 py-2 text-center text-gray-700">{{ $book->quantity }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
