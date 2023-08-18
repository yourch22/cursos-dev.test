<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show_es($ruta, $page)
    {
        $categorias = Category::with('subcategoria')->get();
        $subcategorias = Subcategory::all();

        // $page = 2;
        $page_size = 20;
        $type = "search";
        $price = "price-paid";
        $language = "es";
        $ordering = 'relevance';

        $categoriadetalle = Category::select('categories.*')->where('ruta', $ruta)->get();

        // $categoria = Categorias::select("categorias.*")->where("id", $categoriaElegida)->get();

        if ($categoriadetalle != null) {
            foreach ($categoriadetalle as $value) {
                $categories =  $value["api"];
            }
        }
        $cursoscategory = $this->serviciosapi->getCursosApi($page, $page_size, $type, $categories, $price, $language, $ordering);
        return view('category.show', array("categorias" => $categorias, "categoriadetalle" => $categoriadetalle, 'cursoscategory' => $cursoscategory, 'page' => $page));
    }

    public function subcategory(Request $request, $idCategoria)
    {
        if ($request->ajax()) {
            $home = Category::find($idCategoria)->subcategorias;
            return response()->json($home);
        }
        $data = Subcategory::select('subcategories', 'id')->where('categories_id', $request->idCategoria)->take(100)->get();
        return response()->json($data);
    }
}
