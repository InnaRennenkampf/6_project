<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemsControllers extends Controller
{

    public function items()
    {
        $category = new Category();
        $items = new Item();
        $wrappers = [];

        foreach ($items->all() as $item) {
            $category = Category::firstWhere('id', '=', $item->category_id);
            $wrappers[] = new ItemWrappper($item, $category);
        }

        return viewWithCategories('items', [
                'categories' => $category->all(),
                'wrappers' => $wrappers
                ]);
    }

    public function items_check(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|min:3|max:100',
            'category_id' => 'required',
            'price' => 'required',
            'image' => 'sometimes|image|mimes:jpg,jpeg,png',
            'description' => 'required|min:5|max:1000'
        ]);
        $item = new Item();
        $item->name = $request->input('name');
        $item->category_id = $request->input('category_id');
        $item->price = $request->input('price');
        $item->description = $request->input('description');

        if ($request->hasFile('image')) {
            $request->image->store('images', 'public');
            $item->file_path = $request->image->hashName();
        }

        $item->save();

        return redirect()->route('items');
    }

}
class ItemWrappper
{
    public $item;
    public $category;

    public function __construct($item, $category)
    {
        $this->item = $item;
        $this->category = $category;
    }

}
