<p id='title'>INDEX OF BOOKS</p>

<table>
     <thead>
         <tr>
          <td class='titles'>ISBN</td> 
             <td class='titles'>Título</td>
             <td class='titles'>Autor</td>
             <td class='titles'>Año de publicación</td>
             <td class='titles'>Precio</td>
         </tr>
     </thead>
     <tbody>
         @foreach($books as $book)
             <tr>
               <td>{{ $book->isbn }}</td>  
                 <td>{{ $book->title }}</td>
                 <td>{{ $book->author }}</td>
                 <td>{{ $book->published_date }}</td>
                 <td>{{ $book->price}} €</td>
             </tr>
         @endforeach
     </tbody>
 </table>
<style>
     /* Estilos para la tabla */
table {
  width: 100%;
  border-collapse: collapse;
  border: 2px solid #f7cda9;
  font-size: 1em;
  font-family: Arial, sans-serif;
}


td {
  padding: 12px;
  border-bottom: 1px solid #f7cda9;
}

/* Estilos para las filas alternas */
tr:nth-child(even) {
  background-color: #fdfd96;
}

/* Estilos para el título de la tabla */
#title {
margin-top: 20px;
  font-size: 2em;
  font-weight: bold;
  margin-bottom: 1em;
  color: black;
  text-align: center;
  font-family: Arial, sans-serif;
  text-decoration:underline #fdfd96;
}

/* Estilos para los enlaces */
a {
  color: #4c4c4c;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}
     </style>