<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryType;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $type_categories = CategoryType::all();
        $featuredCategories = Category::where('type', '=', 1)->get();
        $otherCategories = Category::where('type', '=', 2)->get();
        return view('home', compact('products', 'type_categories', 'featuredCategories', 'otherCategories', 'categories'));
    }

}
