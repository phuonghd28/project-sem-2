<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesValidator;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.categories.form', ['data' => null]);
    }

    public function store(CategoriesValidator $request)
    {
        $request->validated();
        $path = $request->file('image')->store('public/images');
        $category = new Category();
        $category->name = $request->name;
        $category->image = $path;
        $category->save();

        return redirect()->route('listCategory')
            ->with('success', 'Thêm mới thành công.');
    }

    public function list()
    {
        $data = Category::all();
        return view('admin.categories.table', ['categories' => $data]);
    }

    public function edit($id)
    {
        $categories = Category::find($id);
        return view('admin.categories.form', ['data' => $categories]);
    }

    public function save(CategoriesValidator $request, $id)
    {
        $request->validated();
        $category = Category::find($id);
        if ($request->hasFile('image')) {
            $request->validated();
            $path = $request->file('image')->store('public/images');
            $category->image = $path;
        }
        $category->name = $request->name;
        $category->save();

        return redirect()->route('listCategory')
            ->with('success', 'Update thành công.');
    }

    public function delete($id)
    {
        $delete = Category::find($id);
        $delete->delete();
        return redirect()->route('listCategory')
            ->with('success', 'Delete thành công.');
    }
}
