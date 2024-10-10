<?php

namespace App\Http\View\Composers;

use App\Models\Category;
use App\Models\Product;

class CategoryComposer
{
    public function compose(): void
    {
        $categories = Category::all();
        view()->share('categories', $categories);

//        foreach ($categories as $category) {
//            $category = Category::query()->find($category->id);
//            view()->share('category', $category);
//        }

        $products = Product::all();
        view()->share('products', $products);
    }
}
