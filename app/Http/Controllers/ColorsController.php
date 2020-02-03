<?php

namespace App\Http\Controllers;

use App\Color;
use App\Product;
use App\ProductColor;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ColorsController extends Controller
{

    // PARTIE API PUBLIC //

    public function allColors(){
        $colors = Color::all();
        return response()->json($colors);
    }

    public function getColor($id){
        $product = Product::findOrFail($id);
        $color = ProductColor::where('id_products', '=', $product->id)->get();
        return response()->json($color);
    }

    public function getColorById($id){
        $colorById = Color::findOrFail($id);
        $colorProduct = ProductColor::where('id_colors', '=', $colorById->id)->get();
        return response()->json($colorProduct);
    }




    // PARTIE ADMIN //

    public function index(){
        $colors = Color::all();
        return view('colors.index', ['colors' => $colors]);
    }

    public function create(){
        $colors = Color::all();
        return view('colors.add', ['colors' => $colors]);
    }

    public function store(Request $request)
    {


        $colorname = $request->colorname;
        $color = $request->hexaCode;

        Color::create([
            'colorname' => $colorname,
            'hexaCode' => $color,
        ]);
        return redirect()->to('/home')->with('status', 'Nouvelle couleur ajoutée !' );


    }

    public function edit($id){

        $color = Color::findOrFail($id);
        return view('colors.edit', ['color' => $color]);

    }

    public function update(Request $request, $id){

        $colorname = $request->colorname;
        $color = $request->hexaCode;
        Color::where('id', $id)->update(['colorname' => $colorname, 'hexaCode' => $color]);

        return redirect()->to('home')->with('status', 'Couleur editée !' );
    }

    public function delete($id){

        $color = Color::findOrFail($id);
        $color->delete();

        return redirect()->to('home')->with('status', 'Couleur supprimée !' );;
    }
}
