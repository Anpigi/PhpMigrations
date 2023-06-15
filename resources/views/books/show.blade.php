
    <div class="container">
        <h1 class="heading">Detalles del libro</h1>
        <hr>

        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{ $book->title }}</h3>
                <p class="card-text">ID: {{ $book->id }}</p>
                <p class="card-text">ISBN: {{ $book->isbn }}</p>
                <p class="card-text">Autor: {{ $book->author }}</p>
                <p class="card-text">Fecha de publicación: {{ $book->published_date }}</p>
                <p class="card-text">Descripción: {{ $book->description }}</p>
                <p class="card-text">Precio: {{ $book->price }} €</p>
            </div>
        </div>
    </div>
    <a href="/books/{{$book->id}}/edit">Editar Libro</a>
    <a href="/books" class="btn-link">Volver a Libros</a>
   
    

<style>
    .heading {
        color: #333;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .card {
        margin-top: 20px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .card-text {
        margin-bottom: 5px;
    }

    .btn-link {
        display: inline-block;
        margin-top: 10px;
        color: #007bff;
        text-decoration: underline;
    }
</style>
