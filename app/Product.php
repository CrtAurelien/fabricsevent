<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['id', 'name', 'id_category'];

    public function category(){
        return $this->belongsTo('App\Category', 'id_category');
    }

    public function color(){
        return $this->hasMany('App\ProductColor','id_products');
    }

}
