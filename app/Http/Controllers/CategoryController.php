<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
        return view('admin.categories.list', [
            'categories' => Category::all(),
        ]);
    }

    public function add()
    {
        return view('admin.categories.add');
    }
    public function edit($id)
    {      
        return view('admin.categories.edit', [
            'category' => Category::find($id),
        ]);
    }
    public function update(Request $request, $id)
    {      
        // dd($request);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->update();
        return redirect()->route('list.categories');
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('list.categories');

    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
        ]);
        return redirect()->route('add.categories');
    }
}
