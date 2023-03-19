<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
   public function index()
   {
      $books = Book::all();
      return view('index', compact('books'));
   }

   public function show($isbn)
   {
      $book = Book::where('isbn', $isbn)->first();
      return view('show', ['book' => $book]);
   }

   public function create(Request $request)
   {
       $html = $request->input('html');
       $dom = new \DOMDocument();
       $dom->loadHTML($html);
   
       $titulo = $dom->getElementsByTagName('title')[0]->nodeValue;
       $descripcion = $dom->getElementsByTagName('p')[0]->nodeValue;
   
       $book = new Book();
       $book->title = $titulo;
       $book->description = $descripcion;
       $book->save();
       return redirect()->route('welcome');
   }

   public function store(Request $request)
   {
      $book = new Book;
      $book->title = $request->title;
      $book->author = $request->author;

      $book->save();

      return redirect()->route('index');
   }

   public function edit(Book $book)
   {
      return view('edit', compact('book'));
   }

   public function update(Request $request, Book $book)
   {
      $book->title = $request->title;
      $book->author = $request->author;
      $book->save();

      return redirect()->route('show', $book);
   }

   public function destroy(Book $book)
   {
      $book->delete();

      return redirect()->route('index');
   }
}
