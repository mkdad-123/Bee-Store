<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategories()
    {
        $categories = Category::all();
        
        return view('categorys', compact('categories'));
    }
    public function searchCategories(Request $request)
    {
        $keyword = $request->query('keyword');
    
        $categories = Category::where('name', 'like', '%' . $keyword . '%')->get();
    
        return view('categories.search', compact('categories', 'keyword'));
    }
}
