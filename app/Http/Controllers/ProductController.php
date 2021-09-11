<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;


class ProductController extends Controller
{
    public function create()
    {
        $category = Category::all();
        return view('admin.products.form', ['data' => null, 'category'=>$category]);
    }

    public function store(ProductRequest $request)
    {
        $request->validated();
        $path = $request->file('image')->store('public/images');
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->image = $path;
        $product->save();

        return redirect()->route('listProduct')
            ->with('success', 'Thêm mới thành công.');
    }

    public function list()
    {
        $data = Product::all();
        return view('admin.products.table', ['products' => $data]);

    }

    public function edit($id)
    {
        $category = Category::all();
        $products = Product::find($id);
        return view('admin.products.form', ['data' => $products, 'category'=>$category]);
    }

    public function save(ProductRequest $request, $id)
    {
        $request->validated();
        $product = Product::find($id);
        if ($request->hasFile('image')) {
            $request->validated();
            $path = $request->file('image')->store('public/images');
            $product->image = $path;
        }
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect()->route('listProduct')
            ->flash('success', 'Update thành công.');
    }

    public function delete($id)
    {
        $delete = Product::find($id);
        $delete->delete();
        return redirect()->route('listProduct')
            ->with('success', 'Xoá thành công.');
    }
}
