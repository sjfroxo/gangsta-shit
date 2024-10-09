<?php

namespace App\Http\Controllers;

use App\Http\Requests\Item\StoreRequest;
use App\Http\Requests\Item\UpdateRequest;
use App\Models\Item;

class ItemController extends Controller
{
    public function create()
    {
        return view('item.create');
    }
    public function index()
    {
        $items = Item::all();
        return view('category.show', compact('items'));
    }

    public function store(StoreRequest $request)
    {
        Item::query()->create($request->validated());

        return redirect()->back();
    }

    public function edit($slug)
    {
        return view('item.edit')
            ->with('Item', Item::query()->firstWhere('slug', '=', $slug));
    }

    public function update(UpdateRequest $request, Item $Item)
    {
        $Item->update($request->validated());

        return redirect()->route('category.show');
    }

//    public function show(int $id)
//    {
//        return view('Item.show')->with('Item', Item::query()->findOrFail($id));
//    }

    public function destroy(string $slug)
    {
        Item::query()->firstWhere('slug', '=', $slug)->delete();

        return redirect()->back();
    }
}
