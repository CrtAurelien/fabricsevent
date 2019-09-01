<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryType;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        return view('categories.index');
    }

    public function create(){
        $typecategories = CategoryType::all('name', 'id');
        return view('categories.add', compact('typecategories'));
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $type = $request->type;

        Category::create([
            'name' => $name,
            'type' => $type,
        ]);

        return redirect()->to('home')->with('status', "Catégorie {$name} ajoutée !" );
    }

    public function edit($id){

        $category = Category::findOrFail($id);
        return view('categories.edit', ['category' => $category]);

    }

    public function update(Request $request, $id){

        $name = $request->name;
        $type = $request->type;
        Category::where('id', $id)->update(['name' => $name, 'type' => $type]);

        return redirect()->to('home')->with('status', "Catégorie {$name} editée !" );
    }

    public function delete($id){

        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->to('home')->with('status', "Catégorie {$category->name} supprimée !" );;
    }

}
