<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class BookController extends Controller
{
    public function addBook(Request $request)
    {
        if ($request->isMethod('get')) {
            $authors = Author::all();
            return view('pages.addBook', ['authors' => $authors]);
        }

        $validated = $request->validate([
            'name' => 'required',
            'year' => 'required',
        ]);

        $book = new Book();
        $author = Author::find($request->author);

        $book->name = $request->name;
        $book->year = $request->year;
        $book->save();

        $book->authors()->attach($author);

        return redirect()->route('main')->with('message', 'Книга добавлена');
    }

    public function books()
    {
        $books = Book::all();
        return view('pages.books', ['books' => $books]);
    }

    public function editBook(Request $request, $id)
    {
        $book = Book::find($id);

        if ($request->isMethod('get')) {
            return view('pages.editBook', ['book' => $book]);
        }

        $validated = $request->validate([
            'name' => 'required',
            'year' => 'required',
        ]);
        
        $book->name = $request->name;
        $book->year = $request->year;
        $book->save();
        return redirect()->route('books')->with('message', "Книга $book->id успешно измененна");
    }

    public function deleteBook($id)
    {
        $book = Book::find($id);
        $book->authors()->detach();
        $book->delete();
        return redirect()->route('books')->with('message', "Книга $book->id успешно удалена");
    }
}
