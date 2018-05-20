<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $category = Category::all();

       return view('categories.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $category = new Category();
        $category->title = $request->name;
        $category->save();
        return redirect('/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $item
     * @return \Illuminate\Http\Response
     */
    public function show($id): View
    {
        $category = Category::find($id);
        $item = Item::all();
        return view('categories.show', compact('category', 'item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($id): View
    {
        $category = Category::find($id);

       return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $item
     * @return \Illuminate\Http\Response
     */



    public function update(Request $request, $id): RedirectResponse
    {
        $category = Category::find($id);
        $category->title = $request->name;
        $category->save();
        return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): RedirectResponse
    {
        $category = Category::destroy($id);
        return redirect('/categories');
    }
}
