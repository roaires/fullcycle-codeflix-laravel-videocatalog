<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{   
    private $rules = [
        'name' => 'required|max:255',
        'is_active' => 'boolean'
    ];
    public function index()
    {
        // Get All
        return Category::all();
    }

    public function store(Request $request)
    {
        // Post
        // $request->all() devido configuração do fillable no model
        $this->validate($request, $this->rules);
        return Category::create($request->all());
    }
   
    public function show(Category $category) //Route Model Binding
    {
        // Get By Id
        return $category; 
    }
   
    public function update(Request $request, Category $category)
    {
     // Put
     $this->validate($request, $this->rules);
     $category->update($request->all());
     return $category;
    }
    
    public function destroy(Category $category)
    {
        //Delete
        $category->delete();
        return response()->noContent(); //204
    }
}
