<?php

use App\Models\Category;

function viewWithCategories($view = null, $data = [], $mergeData = [])
{
    $data['categories'] = Category::all();
    return view($view, $data, $mergeData);
}
