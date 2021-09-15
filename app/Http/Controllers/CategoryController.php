<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.categories.form', ['data' => null]);
    }

    public function store(CategoriesRequest $request)
    {
        $request->validated();
        $category = new Category();
        $category->name = $request->name;
        $category->image = $request->image;
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

    public function save(CategoriesRequest $request, $id)
    {
        $request->validated();
        $category = Category::find($id);
        $category->image = $request->image;
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
