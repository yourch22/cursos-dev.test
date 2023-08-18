<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
class ArticleController extends Controller
{
    public function index_es(){
        //mi ultima modificacion git prueba
        $articulos=Article::all();
        $categorias = Category::with('subcategoria')->get();
        return view('articles.index', ['categorias' => $categorias,"articulos"=>$articulos]);
    }
    public function show_es(Article $article, $ruta)
    {
        $articulosdetalle = Article::where('ruta', $ruta)->first();
        $comments_article = Comment::where('articles_id', '=', $articulosdetalle->id)->where(function ($query) {
            $query->where('estado', '=', 1)
                ->orderBy('fecha_comentario', 'desc');
        })->limit(6)->get();
        if (Cache::has($articulosdetalle->id) == false) {
            Cache::add($articulosdetalle->id, 'contador', 30);
            $articulosdetalle->visitas += 1;
            $articulosdetalle->save();
        }

        $articuloscategory = Category::where('id', $articulosdetalle->categories_id)->first();
        $categorias = Category::with('subcategoria')->get();
        return view('articles.show', ['categorias' => $categorias, 'articulosdetalle'=> $articulosdetalle, 'comments_article'=> $comments_article, 'articuloscategory'=> $articuloscategory]);
    }

    public function index_obtener_cupon(){
        //mi ultima modificacion git prueba
        $categorias = Category::with('subcategoria')->get();
        return view('aplicarcupon', ['categorias' => $categorias]);
    }
}
