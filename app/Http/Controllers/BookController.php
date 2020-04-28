<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\StoreBookPost;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book/index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('book/show', compact('book'));
    }

    public function create()
    {
        $book = new Book();
        return view('book/create', compact('book'));
    }

    public function store(StoreBookPost $request)
    {
        $book = new Book($request->validated());
        $book->save();

        return redirect("/book");
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('book/edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->title = $request->title;
        $book->price = $request->price;
        $book->author = $request->author;
        $book->save();

        return redirect("/book");
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect("/book");
    }
}
