<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use DateTime;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store_es(Request $request)
    {
        $request->validate([
            'nombre'       => 'required|max:255',
            'correo' => 'required|email',
            'comentario' => 'required|regex:/^[(\\)\\=\\&\\$\\;\\-\\_\\*\\"\\%\\[\\]\\<\\>\\?\\¿\\!\\¡\\:\\,\\.\\0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i',
        ]);
        $post = Comment::Create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'comentario' => $request->comentario,
            'users_id' => 1,
            'articles_id' => $request->articles_id,
            'courses_id' => $request->courses_id,
            'respuesta'=>null,
            'fecha_comentario' => new DateTime(),
            'fecha_respuesta'=>null,
            'estado'=>0,
        ]);
         return response()->json(['mensage' => 'ok-comentar']);
    }
}
