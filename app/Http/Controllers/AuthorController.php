<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class AuthorController extends Controller
{
    public function addAuthor(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('pages.addAuthor');
        }

        $validated = $request->validate([
            'name' => 'required',
        ]);

        $author = new Author;
        $author->name = $request->name;
        $author->save();

        return redirect()->route('main')->with('message', 'Автор добавлен');
    }

    public function authors()
    {
        $authors = Author::all();
        return view('pages.authors', ['authors' => $authors]);
    }

    public function deleteAuthor($id)
    {
        $author = Author::find($id);
        $author->books()->detach();
        $author->delete();
        return redirect()->route('authors')->with('message', "Автор $author->id успешно удален");
    }

    public function editAuthor(Request $request, $id)
    {
        $author = Author::find($id);

        if ($request->isMethod('get')) {
            return view('pages.editAuthor', ['author' => $author]);
        }

        $validated = $request->validate([
            'name' => 'required',
        ]);
        
        $author->name = $request->name;
        $author->save();
        return redirect()->route('authors')->with('message', "Автор $author->id успешно изменен");
    }

    public function addBookAuthor(Request $request)
    {
        if ($request->isMethod('get')) {
            $authors = Author::all();
            $books = Book::all();
            return view('pages.addBookAuthor', ['authors' => $authors, 'books' => $books]);
        }

        $author = Author::find($request->author);
        $book = Book::find($request->book);

        $author->books()->attach($book);
        return redirect()->route('main')->with('message', "Автор для книги $book->name добавлен");
    }
}
