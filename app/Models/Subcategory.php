<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    // public function categoria()
    // {
    //     // relacion de una sub categoria pertenece a un solo categoria
    //     // orden de parametro 1: relacion ruta x\modelo, 2: id_tabla llaveforanea, id_tabla llaveprimaria
    //     return $this->belongsTo('App\Models\Category', 'categories_id', 'id');
    // }
    protected $table = 'subcategories';
    // $fillable 'categories_id';

    public function categoria()
    {
        return $this->belongsTo(Category::class,'categories_id','id');
    }
}
