<?php
namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function list()
    {
        return view('admin.authors.list', [
            'authors' => Author::all(),
        ]);
    }

    public function add()
    {
        return view('admin.authors.add');
    }

    public function edit($id)
    {      
        return view('admin.authors.edit', [
            'author' => Author::find($id),
        ]);
    }
    public function update(Request $request, $id)
    {      
        // dd($request);
        $author = Author::find($id);
        $author->firstname = $request->firstname;
        $author->lastname = $request->lastname;
        $author->update();
        return redirect()->route('list.authors');
    }

    public function delete($id)
    {
        $author = Author::find($id);
        $author->delete();
        return redirect()->route('list.authors');

    }

    public function create(Request $request)
    {
        Author::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
        ]);
        return redirect()->route('add.authors');
    }
}
