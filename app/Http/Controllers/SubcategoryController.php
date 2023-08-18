<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{

    public function show_es($ruta, $rutas, $page)
    {
        $categorias = Category::with('subcategoria')->get();
        $traerCatySub = Subcategory::all();
        $subcategoriadetalle = Subcategory::where('ruta', $rutas)->get();
        // $page = 2;
        $page_size = 20;
        if ($subcategoriadetalle[0]["gratis"]==1) {
            $type = "search";
            $price = "price-free";
        } else {
            $type = "search";
            $price = "price-paid";
        }

        $language = "es";
        $ordering = 'relevance';

        // foreach ($subcategoriadetalle as $value) {
        //     $category =  $value["api"];
        // }
        $category =  $subcategoriadetalle[0]["api"];
        $cursosSubcategory = $this->serviciosapi->getCursosApi($page, $page_size, $type, $category, $price, $language, $ordering);

        return view("subcategory.show", array(
            "categorias" => $categorias,
            "subcategoriadetalle" => $subcategoriadetalle,
            'cursosSubcategory' => $cursosSubcategory,
            'page' => $page,
            'traerCatySub' => $traerCatySub
        ));
    }
    
    public function udemy_courses_free_es($ruta, $rutas_free, $page)
    {
        $categorias = Category::with('subcategoria')->get();
        $traerCatySub = Subcategory::all();
        $subcategoriadetalle = Subcategory::where('ruta', $rutas_free)->get();
        // $page = 2;
        $page_size = 20;
        if ($subcategoriadetalle[0]["gratis"]==1) {
            $type = "search";
            $price = "price-free";
        } else {
            $type = "search";
            $price = "price-paid";
        }

        $language = "es";
        $ordering = 'relevance';

        // foreach ($subcategoriadetalle as $value) {
        //     $category =  $value["api"];
        // }
        $category =  $subcategoriadetalle[0]["api"];
        $cursosSubcategory = $this->serviciosapi->getCursosApi($page, $page_size, $type, $category, $price, $language, $ordering);
        return view('inicio.udemy_free',["categorias" => $categorias,
        "subcategoriadetalle" => $subcategoriadetalle,
        'cursosSubcategory' => $cursosSubcategory,
        'page' => $page,
        'traerCatySub' => $traerCatySub]);
    }
}

