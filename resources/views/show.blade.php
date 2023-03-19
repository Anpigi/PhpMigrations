<html>
  <head>
    <title>Book Information</title>
  </head>
  <body>
     <div>
               <p>ISBN: {{ $book->isbn }}</p>
                 <p>TITLE: {{ $book->title }}</p>
                 <p>AUTHOR: {{ $book->author }}</p>
                 <p>DATE: {{ $book->published_date }}</p>
                 <p>PRICE: {{ $book->price}} €</p>
                 <br />
                 <p>DESCRIPTION</p>
                 <p>{{$book->description}}</p>
      </div>
  </body>
</html>

<style>
body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
        padding: 20px;
      }
      
      div {
        background-color: #fdfd96; /* Use the provided color */
        border: 1px solid #ccc;
        padding: 20px;
        box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
        border-radius: 5px;
      }
      
      p {
        margin: 0 0 10px;
        font-size: 16px;
        line-height: 1.5;
      }
      
      p:first-child {
        font-weight: bold;
        font-size: 18px;
      }
      
      p:last-child {
        font-weight: bold;
        font-size: 18px;
        color: black;
      }
</style>