<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function list()
    {
        return view('admin.books.list', [
            'authors' => Author::all(),
            'categories' => Category::all(),
            'books' => Book::all(),
        ]);
    }

    public function add()
    {
        $authors = Author::all();
        $categories = Category::all();

        return view('admin.books.add', [
            'authors' => $authors,
            'categories' => $categories,
        ]);
    }

    public function edit($id)
    {      
        
        return view('admin.books.edit', [
            'book' => Book::find($id),
        ]);
    }
    public function update(Request $request, $id)
    {      
        $book = Book::find($id);
        $book->title = $request->title;
        $book->description = $request->description;
        $book->update();
        return redirect()->route('list.books');
    }

    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('list.books');

    }

    public function store(Request $request)
    {
        Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
            'category' => $request->category,
        ]);
        return redirect()->route('add.books');
    }

}
