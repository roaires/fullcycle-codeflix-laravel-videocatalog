<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    
    private $rules = [
        'name' => 'required|max:255',
        'is_active' => 'boolean'
    ];
    
    public function index()
    {
        // Get All
        return Genre::all();
    }

    public function store(Request $request)
    {
        // Post
        // $request->all() devido configuração do fillable no model
        $this->validate($request, $this->rules);
        return Genre::create($request->all());
    }
   
    public function show(Genre $genre) //Route Model Binding
    {
        // Get By Id
        return $genre; 
    }
   
    public function update(Request $request, Genre $genre)
    {
     // Put
     $this->validate($request, $this->rules);
     $genre->update($request->all());
     return $genre;
    }
    
    public function destroy(Genre $genre)
    {
        //Delete
        $genre->delete();
        return response()->noContent(); //204
    }
}
