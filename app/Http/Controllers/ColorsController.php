<?php

namespace App\Http\Controllers;

use App\Color;
use Illuminate\Http\Request;

class ColorsController extends Controller
{
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
