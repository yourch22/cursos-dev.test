<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Language;
use App\Models\Subcategory;
use App\Models\Ads;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index_courses_es()
    {
        $categorias = Category::with('subcategoria')->get();
        // $subcategorias = Subcategory::all();
        $languages = Language::all();
        $cupones = Course::latest("fecha")->where('precio_oferta', '=' ,'0.00')->paginate(18);
        $cupones_destacados = Course::where('finOferta','>',date("Y-m-d H:i:s"))->orderBy('visitas','desc')->limit(18)->get();
        // return view('coupons.index', ['categorias' => $categorias, 'cupones'=>$cupones,'cupones_destacados'=>$cupones_destacados,'languages'=>$languages]);
        $idioma_actual = app()->getlocale();
        return view('inicio', [
            "categorias" => $categorias, 'idioma_actual' => $idioma_actual,'cupones'=>$cupones,'cupones_destacados'=>$cupones_destacados,'languages'=>$languages
        ]);
    }

    public function index_courses_search_es(Request $request,$search_coupons)
    {
        $request->get('search_coupons');

        $courses_coupons = Course::where('titulo','LIKE','%'.$search_coupons.'%')->where(function ($query){
            // $query->where('finOferta','>',date("Y-m-d H:i:s"));
            // $query->latest('fecha');
        })->latest('fecha')->paginate(18);

        // $courses_coupons = Course::where('titulo','LIKE','%'.$search_coupons.'%')->orderBy('fecha','desc')->paginate(18);
        $categorias = Category::with('subcategoria')->get();
        $subcategorias = Subcategory::all();
        $languages = Language::all();
        // $cupones = Course::latest("fecha")->where('precio_oferta', '=' ,'0.00')->paginate(18);
        // $cupones_destacados = Course::where('finOferta','>',date("Y-m-d H:i:s"))->orderBy('visitas','desc')->limit(18)->get();
        // return view('coupons.index', ['categorias' => $categorias, 'cupones'=>$cupones,'cupones_destacados'=>$cupones_destacados,'languages'=>$languages]);
        $idioma_actual = app()->getlocale();
        // return response()->view('hello')->header('Content-Type', $type);
        return response()->view('search.filter_courses', [
            "categorias" => $categorias, 'idioma_actual' => $idioma_actual,'courses_coupons'=>$courses_coupons,'languages'=>$languages,"search_coupons"=>$search_coupons
        ]);
    }

    public function index_es()
    {

        $page = 1;
        $page_size = 15;
        $type = "search";
        $price = "price-paid";
        $language = "es";
        $ordering = 'relevance';
        $categorias = Category::with('subcategoria')->get();
        $i = mt_rand(1, 5);
        if ($i) {
            $categoria = Category::where("id", $i)->get();
            $category =  $categoria[0]["api"];
            $cursos = $this->serviciosapi->getCursosApi($page, $page_size, $type, $category, $price, $language, $ordering);
        }
        $i1 = mt_rand(6, 9);
        if ($i1) {
            $categoria1 = Category::where("id", $i1)->get();
            $category1 =  $categoria1[0]["api"];
            $cursos1 = $this->serviciosapi->getCursosApi($page, $page_size, $type, $category1, $price, $language, $ordering);
        }
        $i2 = mt_rand(10, 13);
        if ($i2) {
            $categoria2 = Category::where("id", $i2)->get();
            $category2 =  $categoria2[0]["api"];
            $cursos2 = $this->serviciosapi->getCursosApi($page, $page_size, $type, $category2, $price, $language, $ordering);
        }

        // $languaje = "en";
        $this->serviciosapi->getLanguages($language);
        $idioma_actual = app()->getlocale();
        return view('home', [
            "categorias" => $categorias, 'categoria' => $categoria, 'categoria1' => $categoria1, 'categoria2' => $categoria2,
            'cursos' => $cursos, 'cursos1' => $cursos1, 'cursos2' => $cursos2, 'idioma_actual' => $idioma_actual
        ]);
    }
    
    public function show_es(Request $request, $idCategoria)
    {
        if ($request->ajax()) {
            $home = Category::find($idCategoria)->subcategoria;
            return response()->json($home);
        }

        $data = Subcategory::select('subcategoria', 'id')->where('categories_id', $request->idCategoria)->take(100)->get();
        return response()->json($data);
    }

    public function search_es(Request $request, $search, $page)
    {
        if ($search != "") {
            $busqueda = str_replace("-", "%20", $search);
        }
        $categorias = Category::with('subcategoria')->get();
        // $page = 1;
        $page_size = 20;
        $type = "search";
        $price = "price-paid";
        $language = "es";
        $ordering = "relevance";
        $searchcursos = $this->serviciosapi->getCursosApi($page, $page_size, $type, $busqueda, $price, $language, $ordering);
        return view("search.show", array("categorias" => $categorias, "searchcursos" => $searchcursos, "page" => $page, "busqueda" => $busqueda));
    }

    public function udemy_free_search_es(Request $request, $search, $page)
    {
        if ($search != "") {
            $busqueda = str_replace("-", "%20", $search);
        }
        $categorias = Category::with('subcategoria')->get();
        // $page = 1;
        $page_size = 22;
        $type = "search";
        $price = "price-free";
        $language = "es";
        $ordering = "relevance";
        $searchcursosfree = $this->serviciosapi->getCursosApi($page, $page_size, $type, $busqueda, $price, $language, $ordering);
        return view("search.show_search_udemy_free", array("categorias" => $categorias, "searchcursosfree" => $searchcursosfree, "page" => $page, "busqueda" => $busqueda));
    }

    public function show_udemy_free_es(Request $request, $id_courses, $rutafree)
    {
        // $id_curso = $request->id_curso;
        $categorias = Category::with('subcategoria')->get();
        $courses_free_detalle=$this->serviciosapi->getCourses($id_courses);
        $rutaSubCategory=$courses_free_detalle->primary_subcategory->title_cleaned;
        $page = 1;
        $page_size = 3;
        $type = "search";
        $price = "price-free";
        $language = "es";
        $ordering = 'relevance';
        $categoria1 = Subcategory::where("ruta", $rutaSubCategory)->get();
        $category1 =  $categoria1[0]["api"];
        $cursos2_relacionados = $this->serviciosapi->getCursosApi($page, $page_size, $type, $category1, $price, $language, $ordering);
        $categoria_home = Category::all();
        $ads=Ads::all();
        
        // $cursosdestacados = Course::orderBy('fecha', 'desc')->orderBy('visitas', 'desc')->limit(12)->get();
        $cursosdestacados = Course::where('finOferta','>',date("Y-m-d H:i:s"))->orderBy('visitas','desc')->limit(12)->get();
        // $data = SubCategory::select('subcategoria', 'id')->where('categories_id', $request->idCategoria)->take(100)->get();
        return view('search.details_courses_udemy_free', [
            'categoria_home'=>$categoria_home,'courses_free_detalle'=>$courses_free_detalle,'cursosdestacados'=>$cursosdestacados,'cursos2_relacionados'=>$cursos2_relacionados,'categorias'=>$categorias,"ads"=>$ads]);
    }

    public function politicas_privacidad_es(){
        $categorias = Category::with('subcategoria')->get();
        return view('politicas_privacidad.politicas-de-privacidad',['categorias'=>$categorias]);
    }
    
    public function politica_cookies_es(){
        $categorias = Category::with('subcategoria')->get();
        return view('politicas_privacidad.politica-de-cookies',['categorias'=>$categorias]);
    }

    public function coupons_Udemy_free_es()
    {
        $page = 1;
        $page_size = 18;
        $type = "search";
        $price = "price-free";
        $language = "es";
        $ordering = 'relevance';
        $categorias = Category::with('subcategoria')->get();
        $i = mt_rand(1, 5);
        if ($i) {
            $categoria = Category::where("id", $i)->get();
            $category =  $categoria[0]["api"];
            $cursos = $this->serviciosapi->getCursosApi($page, $page_size, $type, $category, $price, $language, $ordering);
        }
        $i1 = mt_rand(6, 9);
        if ($i1) {
            $categoria1 = Category::where("id", $i1)->get();
            $category1 =  $categoria1[0]["api"];
            $cursos1 = $this->serviciosapi->getCursosApi($page, $page_size, $type, $category1, $price, $language, $ordering);
        }
        $i2 = mt_rand(10, 13);
        if ($i2) {
            $categoria2 = Category::where("id", $i2)->get();
            $category2 =  $categoria2[0]["api"];
            $cursos2 = $this->serviciosapi->getCursosApi($page, $page_size, $type, $category2, $price, $language, $ordering);
        }
        // $languaje = "en";
        $this->serviciosapi->getLanguages($language);
        $idioma_actual = app()->getlocale();
        return view('inicio', [
            "categorias" => $categorias, 'categoria' => $categoria, 'categoria1' => $categoria1, 'categoria2' => $categoria2,
            'cursos' => $cursos, 'cursos1' => $cursos1, 'cursos2' => $cursos2, 'idioma_actual' => $idioma_actual
        ]);
    }
}
