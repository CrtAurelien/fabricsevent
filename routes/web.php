<?php

use App\Category;
use App\CategoryType;
use App\Product;
use App\Color;

/* ------ PARTIE PUBLIC ------ */
Route::get('/', function () {
    return view('welcome');
});

Route::get('api/categories', ['uses' => 'ProductsController@allCategories']);
Route::get('api/category/{id}', ['uses' => 'ProductsController@getCategory']);
Route::get('api/products/', ['uses' => 'ProductsController@allProducts']);
Route::get('api/product/{id}', ['uses' => 'ProductsController@getProduct']);

Route::group(['middleware' => ['auth']], function () {
    /* ------ PARTIE ADMIN ------ */

    /* PRODUITS */
    Route::get('/products', 'ProductsController@index')->name('products');
    Route::get('/product/new', 'ProductsController@create')->name('new-product');
    Route::post('/product/new', 'ProductsController@store')->name('store-product');
    Route::get('/product/edit/{id}', 'ProductsController@edit')->name('edit-product');
    Route::post('/product/edit/{id}', 'ProductsController@update')->name('update-product');
    Route::get('/product/delete/{id}', 'ProductsController@delete')->name('delete-product');

    /* CATEGORIES */
    Route::get('/categories', 'CategoriesController@index')->name('categories');
    Route::get('/category/new', 'CategoriesController@create')->name('new-category');
    Route::post('/category/new', 'CategoriesController@store')->name('store-category');
    Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('edit-category');
    Route::post('/category/edit/{id}', 'CategoriesController@update')->name('update-category');
    Route::get('/category/delete/{id}', 'CategoriesController@delete')->name('delete-category');


    /* COULEURS */
    Route::get('/colors', 'ColorsController@index')->name('colors');
    Route::get('/color/new', 'ColorsController@create')->name('new-color');
    Route::post('/color/new', 'ColorsController@store')->name('store-color');
    Route::get('/color/edit/{id}', 'ColorsController@edit')->name('edit-color');
    Route::post('/color/edit/{id}', 'ColorsController@update')->name('update-color');
    Route::get('/color/delete/{id}', 'ColorsController@delete')->name('delete-color');




    Route::get('/home', 'HomeController@index')->name('home');
});

Auth::routes();



/* PASSAGE DES VARIABLES DU MENU SUR TOUTES LES PAGES */
View::composer(['*'], function ($view){

    /* Retourne toutes les datas */
    $products = Product::all();
    $categories = Category::all();
    $type_categories = CategoryType::all();
    $colors = Color::all();

    /* Retourne les datas spécifiques */
    $allcategories = Category::pluck('name', 'id');
    $allcolors = Color::pluck('colorname', 'id');
    $typecategories = CategoryType::pluck('name','id'); /* utilisée dans categories.add */
    $featuredCategories = Category::where('type', '=', 1)->get();
    $otherCategories = Category::where('type', '=', 2)->get();

    $view->with(compact(
        'products', 'type_categories', 'featuredCategories', 'otherCategories',
        'categories', 'typecategories', 'allcategories', 'colors', 'allcolors'));
});