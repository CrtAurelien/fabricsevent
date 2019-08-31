<?php

use App\Category;
use App\CategoryType;
use App\Product;

/* ------ PARTIE PUBLIC ------ */
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {
    /* ------ PARTIE ADMIN ------ */

    /* PRODUITS */
    Route::get('/products', 'ProductsController@index')->name('products');
    Route::get('/product/new', 'ProductsController@create')->name('new-product');
    Route::post('/products/new', 'ProductsController@store')->name('store-product');
    Route::post('/products/delete/{id}', 'ProductsController@delete')->name('delete-product');

    /* CATEGORIES */
    Route::get('/categories', 'CategoriesController@index')->name('categories');
    Route::get('/category/new', 'CategoriesController@create')->name('new-category');
    Route::post('/categories/new', 'CategoriesController@store')->name('store-category');
    Route::get('/category/delete/{id}', 'CategoriesController@delete')->name('delete-category');


    Route::get('/home', 'HomeController@index')->name('home');
});

Auth::routes();



/* PASSAGE DES VARIABLES DU MENU SUR TOUTES LES PAGES */
View::composer(['*'], function ($view){

    /* Retourne toutes les datas */
    $products = Product::all();
    $categories = Category::pluck('name', 'id');
    $type_categories = CategoryType::all();

    /* Retourne les datas spécifiques */
    $typecategories = CategoryType::pluck('name','id'); /* utilisée dans categories.add */
    $featuredCategories = Category::where('type', '=', 1)->get();
    $otherCategories = Category::where('type', '=', 2)->get();

    $view->with(compact('products', 'type_categories','featuredCategories', 'otherCategories', 'categories', 'typecategories'));
});