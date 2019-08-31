<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryType extends Model
{
    protected $table = 'categories_type';
    protected $fillable = ['id', 'name'];

}
