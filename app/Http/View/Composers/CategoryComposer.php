<?php

namespace App\Http\View\Composers;

use App\Models\Category;
use App\Models\Item;

class CategoryComposer
{
    public function compose(): void
    {
        $categories = Category::all();
        view()->share('categories', $categories);

        $items = Item::all();
        view()->share('items', $items);
    }
}
