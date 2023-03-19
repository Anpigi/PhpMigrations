<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       
    </head>
    <body>
        <header>
            <!-- Logo y enlace a la página principal -->
            <nav>
                    <a href="/books">SHOW ALL BOOKS</a>
                    <a href="/books/">SHOW ONE BOOK</a>
                    <a href="/books/create">CREATE BOOK</a>
                    <a href="/"> STORE BOOK</a>
                    <a href="/"> UPDATE BOOK</a>
                    <a href="/"> EDIT BOOK</a>
                    <a href="/">DELETE BOOK</a>
            </nav>
            <!-- Imagen principal y mensaje de bienvenida -->
        </header>
        <main>
            <!-- Contenido principal de la página -->
        </main>
        <footer>
            <!-- Información de contacto y derechos de autor -->
        </footer>
    </body>
</html>
<style>
    body {
	background-color: #white;
	color: #333;
	font-family: Arial, sans-serif;
}

a {
	color: #333;
	text-decoration: none;
}

a:hover {
	text-decoration: underline;
}

button,
input[type="submit"] {
	background-color: #333;
	color: #fdfd96;
	border: none;
	padding: 10px 20px;
	font-size: 16px;
	cursor: pointer;
}

nav{
    display: flex;
    justify-content: space-between;
    margin-left: 40px;
    margin-right: 40px;
    align-items: center;
    height: 50px;
}

header{
    background-color: #fdfd96;
    width: 100%;
    height: 50px;

}

button:hover,
input[type="submit"]:hover {
	background-color: #fdfd96;
	color: #333;
}

/* Estilos específicos para elementos con fondo blanco */
.white-bg {
	background-color: #fff;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

/* Estilos específicos para botones secundarios */
.secondary-btn {
	background-color: transparent;
	color: #333;
	border: 2px solid #333;
	padding: 10px 20px;
	font-size: 16px;
	cursor: pointer;
}

.secondary-btn:hover {
	background-color: #333;
	color: #fdfd96;
}

/* Estilos para títulos y subtítulos */
h1, h2, h3 {
	color: #333;
	font-weight: bold;
	margin: 0 0 20px 0;
}

h1 {
	font-size: 36px;
}

h2 {
	font-size: 24px;
}

h3 {
	font-size: 18px;
}

/* Estilos para párrafos */
p {
	margin: 0 0 20px 0;
	line-height: 1.5;
}

/* Estilos para listas */
ul, ol {
	margin: 0 0 20px 0;
	padding-left: 20px;
}

/* Estilos para imágenes */
img {
	max-width: 100%;
	height: auto;
}

    </style>