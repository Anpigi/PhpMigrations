<!-- books/create.blade.php -->

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div>
        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" id="isbn" required>
    </div>

    <div>
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
    </div>

    <div>
        <label for="author">Autor:</label>
        <input type="text" name="author" id="author" required>
    </div>

    <div>
        <label for="published_date">Fecha de publicación:</label>
        <input type="date" name="published_date" id="published_date" required>
    </div>

    <div>
        <label for="description">Descripción:</label>
        <textarea name="description" id="description" rows="4" required></textarea>
    </div>

    <div>
        <label for="price">Precio:</label>
        <input type="number" name="price" id="price" step="0.01" required>
    </div>

    <button type="submit">Crear Libro</button>
</form>
