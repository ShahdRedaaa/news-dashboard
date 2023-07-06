<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        return view('categories.index',compact('categories'));
    }

    
    public function create()
    {
        return view('categories.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request , [ "name" => "required" ]); 
        Category::create($request->all()); 
        return redirect()->route('categories.index')->with('message' , 'Category Add Successfully'); 
    }

    
    public function show(Category $category)
    {
        //
    }

    
    public function edit(Category $category)
    {
    
        return view('categories.edit',compact('category'));
    }

    
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('categories.index')->with('success' , 'Category update Successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete(); 
        return redirect()->route('categories.index')->with('success' , 'Category Deleted Successfully'); 
    }
}
