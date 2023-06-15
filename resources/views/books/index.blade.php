    <div class="container">
        <h1>Lista de libros</h1>
        <hr>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Título</th>
                    <th>ISBN</th>
                    <th>Autor</th>
                    <th>Fecha de publicación</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td><a href="/book/{{$book->id}}">{{ $book->title }}</a></td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->published_date }}</td>
                        <td>{{ $book->description }}</td>
                        <td>{{ $book->price }} €</td>
                        <td>
                            <form method="POST" action="{{ route('books.destroy', $book->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar libro</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

<style>


    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #333;
        border-collapse: collapse;
    }
    
    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }
    
    .table th {
        background-color: #dc3545;
        color: #fff;
    }
    
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(220, 53, 69, 0.1);
    }
    
    .table-striped tbody tr:hover {
        background-color: rgba(220, 53, 69, 0.2);
    }
    
    </style>
