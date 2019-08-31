<?php

namespace App\Http\Controllers;

use App\Category;
use App\Color;
use App\Product;
use App\ProductColor;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        return view('products.index');
    }

    public function create(){
        $categories = Category::pluck('name', 'id');
        return view('products.add', ['categories' => $categories]);
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

        return redirect()->url('/home')->with('status', 'Nouveau produit enregistré !' );
    }
}
