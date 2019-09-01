<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    protected $table = 'products_colors';
    protected $fillable = ['id_colors', 'id_products'];

    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function color(){
        return $this->belongsTo('App\Color');
    }
}