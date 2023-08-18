<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'correo', 'comentario','users_id','articles_id','courses_id','respuesta','fecha_comentario','fecha_respuesta','estado'];
}
