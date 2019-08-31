<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors';
    protected $fillable = ['id', 'colorname', 'hexaCode'];

    public function product(){

    }
}
