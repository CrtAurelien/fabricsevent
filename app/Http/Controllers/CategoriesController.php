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

        return redirect()->to('home')->with('status', 'Nouvelle catégorie enregistrée !' );
    }

    public function delete($id){

        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->to('home')->with('status', 'Catégorie supprimée !' );;
    }
}
