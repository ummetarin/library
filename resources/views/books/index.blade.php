<h1 class="text-3xl font-bold text-teal-700 mb-6 text-center"> All Books</h1>

<!-- Add Book Button -->
<div class="flex justify-end mb-4">
    <a href="{{ route('books.create') }}" 
       class="px-5 py-2 bg-teal-600 text-white font-medium rounded-lg shadow-md hover:bg-teal-700 transition duration-300">
      Add New Book
    </a>
</div>

<!-- Responsive Table Container -->
<div class="overflow-x-auto bg-white p-6 rounded-xl shadow-lg">
    <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
        <thead class="bg-gradient-to-r from-teal-700 to-teal-900 text-white text-sm">
            <tr>
                <th class="py-3 px-3 text-left">Image</th>
                <th class="py-3 px-3 text-left">Title</th>
                <th class="py-3 px-3 text-left">Author</th>
                <th class="py-3 px-3 text-left">Category</th>
                <th class="py-3 px-3 text-left">Price</th>
                <th class="py-3 px-3 text-left">Quantity</th>
                <th class="py-3 px-3 text-center">Actions</th>
            </tr>
        </thead>
        <tbody class="text-sm divide-y divide-gray-300 bg-gray-50">
            @foreach($books as $book)
            <tr class="hover:bg-gray-100 transition">
                <!-- Book Image -->
                <td class="py-3 px-3">
                    <img src="{{ $book->image }}" alt="Book Image" 
                         class="w-[40px] h-[50px] object-cover rounded-md border border-gray-300 shadow-sm">
                </td>
                <!-- Book Details -->
                <td class="py-3 px-3 font-medium text-gray-800">{{ $book->title }}</td>
                <td class="py-3 px-3 text-gray-600">{{ $book->author }}</td>
                <td class="py-3 px-3 text-gray-600">{{ $book->category }}</td>
                <td class="py-3 px-3 text-green-600 font-semibold">${{ $book->price }}</td>
                <td class="py-3 px-3 text-gray-500">{{ $book->quantity }}</td>
                <!-- Action Buttons -->
                <td class="py-3 px-3 flex justify-center space-x-2">
                    <a href="{{ route('books.edit', $book->id) }}" 
                       class="px-3 py-1 bg-blue-500 text-white text-xs font-medium rounded-md shadow-md hover:bg-blue-600 transition duration-300">
                       ✏️ Edit
                    </a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="px-3 py-1 bg-red-500 text-white text-xs font-medium rounded-md shadow-md hover:bg-red-600 transition duration-300">
                            🗑️ Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Responsive Breakpoints -->
<style>
    @media (max-width: 1024px) {
        table { font-size: 14px; }
        th, td { padding: 10px; }
    }
    @media (max-width: 768px) {
        table { font-size: 13px; }
        th, td { padding: 8px; }
        img { width: 35px; height: 45px; }
    }
    @media (max-width: 480px) {
        table { font-size: 12px; }
        th, td { padding: 6px; }
        img { width: 30px; height: 40px; }
    }
</style>
