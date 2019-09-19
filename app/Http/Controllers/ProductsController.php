<?php

namespace App\Http\Controllers;

use App\Category;
use App\Color;
use App\Product;
use App\ProductColor;
use Dotenv\Validator;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // PARTIE API PUBLIC //

    public function allCategories(){
        $categories = Category::all();
        return response()->json($categories);
    }

    public function getCategory($id){
        $category = Category::findOrFail($id);
        return response()->json($category);
    }

    public function allProducts(){
        $products = Product::all();
        return response()->json($products);
    }

    public function getProduct($id){
        $category = Category::findOrFail($id);
        $product = Product::where('id_category', '=', $category->id)->get();
        return response()->json($product);
    }



    // PARTIE ADMIN //

    public function index(){
        return view('products.index');
    }

    public function create(){
        $allcolors = Color::pluck('colorname', 'id');
        $allcategories = Category::pluck('name', 'id');
        return view('products.add', ['allcategories' => $allcategories, 'allcolors' => $allcolors]);
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $category = $request->id_category;

        $colorname = $request->colorname;
        $color = $request->hexaCode;


        $data = Product::create([
            'name' => $name,
            'id_category' => $category,
        ]);
        $data2 = Color::create([
            'colorname' => $colorname,
            'hexaCode' => $color,
        ]);
        ProductColor::create([
            'id_colors' => $data2->id,
            'id_products' => $data->id,
        ]);

        return redirect()->to('/home')->with('status', "Produit {$name} ajouté !" );
    }

    public function edit($id){

        $product = Product::findOrFail($id);
        $color = Color::where('id', '=', $product->color[0]->id_colors)->get();
        return view('products.edit', ['product' => $product, 'color' => $color]);

    }

    public function update(Request $request, $id){

        $name = $request->name;
        $category = $request->id_category;
        Product::where('id', $id)->update(['name' => $name, 'id_category' => $category]);

        return redirect()->to('home')->with('status', "Produit {$name} edité !" );
    }

    public function delete($id){

        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->to('home')->with('status', "Produit {$product->name} supprimé !" );;
    }
}
