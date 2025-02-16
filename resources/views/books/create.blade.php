
@section('content')
    <h1>Add a New Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Book Title" required>
<input type="text" name="author" placeholder="Author Name" required>
<input type="number" name="price" placeholder="Price" required>
<input type="text" name="category" placeholder="Category" required>
<input type="text" name="image" placeholder="Image" required> 
<input type="number" name="quantity" placeholder="Quantity" required> 

        <button type="submit">Add Book</button>
    </form>