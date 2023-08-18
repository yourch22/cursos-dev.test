<?php

namespace App\Models;
use Conner\Tagging\Taggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use Taggable;
    use HasFactory;
    protected $fillable = ['codigo', 'titulo', 'descripcion_corta', 'descripcion', 'portada', 'idioma', 'languages_id',
    'categories_id', 'subcategories_id', 'ruta', 'estado', 'cupon','plataforma', 'calificacion', 'instructor', 'precio', 'precio_oferta', 'finOferta', 'visitas','tag', 'fecha'
];
}
