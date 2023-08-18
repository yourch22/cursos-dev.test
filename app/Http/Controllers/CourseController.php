<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Course;
use App\Models\Language;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CourseController extends Controller
{
    public function index_es(Request $request)
    {
        $categorias = Category::with('subcategoria')->get();
        // $subcategorias = Subcategory::all();
        $languages = Language::all();
        $ads=Ads::all();
        $cupones = Course::latest("fecha")->where('precio_oferta', '=' ,'0.00')->paginate(17);
        //   $cupones = Course::latest("fecha")->where('precio_oferta', '=' ,'0.00')->where('finOferta','>',date("Y-m-d H:i:s"))->orderBy('visitas','desc')->paginate(18);
        // $cupones_destacados = Course::where('finOferta','>',date("Y-m-d H:i:s"))->orderBy('visitas','desc')->limit(13)->get();
        // $cupones_destacados = Course::where('finOferta','>',date("Y-m-d H:i:s"))->orderBy('visitas','desc')->limit(13)->get();
        $cupones_destacados = Course::where('finOferta','>',date("Y-m-d H:i:s"))->where('precio_oferta', '=', '0.00')->orderBy('visitas','desc')->limit(13)->get();
         $cupones_descuento = Course::where('finOferta','>',date("Y-m-d H:i:s"))->where('precio_oferta', '>', '0.00')->orderBy('visitas','desc')->limit(23)->get();
        return view('coupons.index', ['categorias' => $categorias, 'cupones'=>$cupones,'cupones_destacados'=>$cupones_destacados,'languages'=>$languages,'cupones_descuento'=>$cupones_descuento,"ads"=>$ads]);
    }

    public function show_es(Request $request, $rutacoupons)
    {
        $cursosdetalle = Course::where('ruta', $rutacoupons)->first();
        $cursosdestacados = Course::orderBy('fecha', 'desc')->orderBy('visitas', 'desc')->limit(12)->get();
        $ads=Ads::all();
        $comments = Comment::where('courses_id','=', $cursosdetalle->id)->where(function ($query) {
               $query->where('estado', '=', 1)
                    ->orderBy('fecha_comentario', 'desc');
           })->limit(6)->get();

        $cursosrelacionados = Course::where("subcategories_id", '=', $cursosdetalle->subcategories_id)
            ->orderBy('visitas', 'desc')->limit(3)->get();

        if (Cache::has($cursosdetalle->id) == false) {
            Cache::add($cursosdetalle->id, 'contador', 30);
            $cursosdetalle->visitas += 1;
            $cursosdetalle->save();
        }
        $categorias = Category::with('subcategoria')->get();
        $subcategorias = Subcategory::all();
        return view("coupons.show", array(
            "cursosdetalle" => $cursosdetalle,
            "cursosdestacados" => $cursosdestacados,
            "cursosrelacionados" => $cursosrelacionados,
            "categorias" => $categorias,
            "subcategorias"=>$subcategorias,
            "comments"=>$comments,
            "ads"=>$ads
        ));
    }

    public function coupons_discount_es(Request $request){

        $course_search = 'Desarrollo Web';
        $coupons_discount = Course::where('finOferta','>',date('Y-m-d H:i:s'))->where('precio_oferta','>','0')->where('calificacion','>=','4.5')->orderBy('calificacion','desc')->paginate(20);
        //$coupons_discount = Course::where('titulo','LIKE',"%{$name}%")->where('finOferta','>',date('Y-m-d H:i:s'))->where('precio_oferta','>','0')->where('calificacion','>=','4.6')->orderBy('calificacion','desc')->paginate(20);
        return view('coupons.coupons_discount',['coupons_discount'=>$coupons_discount,'course_search'=>$course_search]);
    }
    public function search_coupons_discount_es(Request $request, $course_search){
        // $name = 'desarrollo web';_%CARACTER_
        // $coupons_discount = Course::where("titulo","LIKE","%{$course_search}%_")->where('finOferta','>',date('Y-m-d H:i:s'))->where('precio_oferta','>','0')->where('calificacion','>=','4.6')->orderBy('calificacion','desc')->paginate(20);
        $coupons_discount = Course::where("tag","=",$course_search)->where('finOferta','>',date('Y-m-d H:i:s'))->where('precio_oferta','>','0')->where('calificacion','>=','4.6')->orderBy('calificacion','desc')->paginate(20);
        return view('coupons.coupons_discount',['coupons_discount'=>$coupons_discount,"course_search"=>$course_search]);
    }
    public function search_courses_discount_es(Request $request, $course_search){
        // $name = 'desarrollo web';_%CARACTER_
        $coupons_discount = Course::where("titulo","LIKE","%{$course_search}%")->where('finOferta','>',date('Y-m-d H:i:s'))->where('precio_oferta','>','0')->where('calificacion','>=','4.6')->orderBy('calificacion','desc')->paginate(20);
        // $coupons_discount = Course::where("tag","=",$course_search)->where('finOferta','>',date('Y-m-d H:i:s'))->where('precio_oferta','>','0')->where('calificacion','>=','4.6')->orderBy('calificacion','desc')->paginate(20);
        return view('coupons.coupons_discount',['coupons_discount'=>$coupons_discount,"course_search"=>$course_search]);
    }
    public function index_itoo_es(Request $request)
    {
        $categorias = Category::with('subcategoria')->get();
        // $subcategorias = Subcategory::all();
        $languages = Language::all();
        $cupones_itoo = Course::latest("fecha")->where('plataforma', '=' ,'Itoo')->paginate(30);
        return view('itoo.index', ['categorias' => $categorias, 'cupones_itoo'=>$cupones_itoo,'languages'=>$languages]);
    }
        public function reportexpired(Request $request){
        // $cursosdetallereport = Course::where('id', $request->idcurso)->first();
        // $cursosdetallereport->estado += 1;
        //     if ($cursosdetallereport->estado >= 10) {
        //     $cursosdetallereport->finOferta = date("Y-m-d H:i:s");
        //     $date_now = date('Y-m-d H:i:s');
        //     $date_past = strtotime('-3 day', strtotime($date_now));
        //     $date_past = date('Y-m-d H:i:s', $date_past);
        //     $cursosdetallereport->fecha = $date_past;
        // }
        // $cursosdetallereport->save();
        // return response()->json(['code'=>200, 'message'=>'ok Reportado','data' => $cursosdetallereport], 200);
    }
}
