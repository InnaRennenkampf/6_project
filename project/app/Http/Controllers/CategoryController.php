<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function category()
    {
        return view('category', ['categories' => Category::all()]);
    }

    public function category_check(Request $request)
    {
        $valid = $request->validate([
            'category' => 'required|min:4|max:20'
        ]);

        $category = new Category();
        $category->name = $request->input('category');

        $category->save();

        return redirect()->route('category');
    }
}
