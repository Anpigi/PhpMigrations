<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('books.show', ['book' => $book]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $book = new Book;
        $book->isbn = $request->input('isbn');
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->published_date = $request->input('published_date');
        $book->description = $request->input('description');
        $book->price = $request->input('price');
        $book->save();

        return redirect('/books');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('books.edit', ['book' => $book]);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->price = $request->input('price');
        $book->description = $request->input('description');
        $book->published_date = $request->input('published_date');
        $book->save();
        return redirect('/books')->with('success', 'Libro actualizado correctamente');
    }


    public function destroy($id)
{
    $book = Book::findOrFail($id);
    $book->delete();
    return view('books.index');
}

}
