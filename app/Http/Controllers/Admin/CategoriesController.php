<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    
    public function index()
    {
        $category = Category::orderBy('id', 'DESC')->get();
        return view('admin.categories.index', compact('category'));
    }

 
    public function create()
    {
        return view('admin.categories.create');
    }

   
    public function store(Request $request)
    {
        Category::create($request->all());
        
        return redirect()->route('admin.categories.index')->with('success', 'Success done');
    }

    public function show(Category $category)
    {
       return view('admin.categories.show', compact('category'));
        
    }

   
    public function edit(Category $category)
    {
    return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $requestData = $request->all();


        
        $category->update($requestData);;
        
        return redirect()->route('admin.categories.index')->with('success', 'Update done');
    }

    
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Delete done');
    }
}
