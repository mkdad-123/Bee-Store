<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showProducts($id)
    {
        $category = Category::findOrFail($id);

        $products = $category->products;

        return view('products', compact('category', 'products'));
    }

    public function showProductDetails($id)

    {
        $product = Product::find($id);

        if (!$product) {
            abort(404, 'not found');
        }

        return view('products.details', compact('product'));
    }

    public function searchProducts(Request $request)
    {
        $keyword = $request->query('keyword');

        $products = Product::where('name', 'like', '%' . $keyword . '%')->get();

        return view('products.search', compact('products', 'keyword'));
    }
}
