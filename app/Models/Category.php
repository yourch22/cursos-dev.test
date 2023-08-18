<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // public function subcategoria()
    // {
    //     // return $this->belongsTo('App\Subcategorias', 'id_categoria', 'id');
    //     return $this->hasMany('App\Models\Subcategory', 'categories_id', 'id');
    // }
    protected $table = 'categories';

    // public function subcategoria()
    // {
    //     return $this->hasMany('App\Models\Subcategory', 'categories_id', 'id');
    // }
    public function subcategoria()
    {
        return $this->hasMany(Subcategory::class,'categories_id','id');
    }
}
