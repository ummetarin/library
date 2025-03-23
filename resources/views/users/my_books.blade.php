<div class="container mx-auto p-6">
    <h3 class="text-2xl font-semibold mb-4 text-[#D2B48C]">My Borrowed Books</h3>

    <div class="overflow-x-auto">
        <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-gradient-to-r from-[#D2B48C] to-[#b8956e] text-white text-sm">
                <tr>
                    <th class="py-3 px-3 text-left">#</th>
                    <th class="py-3 px-3 text-left">Book Name</th>
                    <th class="py-3 px-3 text-left">Price</th>
                    <th class="py-3 px-3 text-left">Payment Method</th>
                    <th class="py-3 px-3 text-left">Borrowed At</th>
                    <th class="py-3 px-3 text-left">Return</th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-300 bg-gray-50">
                @foreach($myBooks as $index => $book)
                    <tr class="hover:bg-gray-100 transition">
                        <td class="py-3 px-3 font-medium text-gray-800">{{ $index + 1 }}</td>
                        <td class="py-3 px-3 text-gray-600">{{ $book->title }}</td>
                        <td class="py-3 px-3 text-gray-600">${{ $book->price }}</td>
                        <td class="py-3 px-3 text-gray-600">{{ $book->payment_method }}</td>
                        <td class="py-3 px-3 text-gray-600">{{ $book->borrowed_at }}</td>
                        <td>
                            <a href="{{ route('books.return', $book->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-700 transition">
                                Return
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>