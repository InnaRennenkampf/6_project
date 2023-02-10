<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function item(Request $request)
    {
        $item_id = $request->route('item_id');
        $item = Item::firstWhere('id', $item_id);
        return viewWithCategories('item', ['item' => $item]);
    }

    public function itemDelete($item_id)
    {
        Item::find($item_id)->delete();
        return redirect()->route('items')->with('success', 'Товар был удален');
    }
}
