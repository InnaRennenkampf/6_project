<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemsByCategoryIDController extends Controller
{
    public function itemsByCategoryId(Request $request)
    {
        $category_id = $request->route('category_id');
        $items = Item::where('category_id', $category_id)->get();
        return viewWithCategories('itemsByCategoryId', ['items' => $items]);
    }
}
