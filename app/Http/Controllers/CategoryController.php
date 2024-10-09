<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(StoreRequest $request)
    {
        Category::query()->create($request->validated());

        return redirect()->route('category.index');
    }

    public function edit(Category $category)
    {
        return view('category.edit',compact('category'));
    }

    public function update(UpdateRequest $request, Category $category)
    {
        $category->update($request->validated());

        return redirect()->route('category.index');
    }

//    public function show(int $id)
//    {
//        return view('category.show')->with('category', Category::query()->findOrFail($id));
//    }

    public function destroy(int $id)
    {
            Category::query()->findOrFail($id)->delete();

            return redirect()->route('category.index');
    }
}
