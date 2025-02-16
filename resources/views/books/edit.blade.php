<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $book->title }}" required>
    <input type="text" name="author" value="{{ $book->author }}" required>
    <input type="number" name="price" value="{{ $book->price }}" required>
    <input type="text" name="category" value="{{ $book->category }}" required>
    <input type="text" name="image" value="{{ $book->image }}" required>
    <input type="number" name="quantity" value="{{ $book->quantity }}" required>
    <button type="submit">Update Book</button>
</form>