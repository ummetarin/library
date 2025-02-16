
@section('content')
    <h1>All Books</h1>
    <a href="{{ route('books.create') }}">Add New Book</a>

    @foreach($books as $book)
       
            <p>{{ $book->title }}</p>
            <p>{{ $book->author }}</p>
            <p>${{ $book->price }}</p>
            <p>{{ $book->category }}</p>
            <p><img src="{{ $book->image }}" alt="Book Image" width="100"></p>
            <p>{{ $book->quantity }}</p>
        <a href="{{ route('books.edit', $book->id) }}">Edit</a>
        <form action="{{ route('books.destroy', $book->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endforeach