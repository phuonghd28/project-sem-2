<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductClientController extends Controller
{
    public function list(Request $request){
        $query = Product::query();
        $category = $request->get('category');
        $search = $request->get('search');
        if ($search || strlen($search) > 0) {
            $query = $query->where('name', 'like', '%' . $search . '%');
        }
        if($category){
            $query = $query->where('category_id', $category);
        }
        $product = $query->paginate(12)->appends(['search' => $search]);
//        return $product;
        return view('clients.list',[
           'products' => $product
        ]);
    }
}
