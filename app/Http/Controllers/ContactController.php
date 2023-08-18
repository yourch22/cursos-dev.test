<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // public function index_es()
    // {
    //     $categorias = Category::all();
    //     return view('contacts.index',['categorias'=>$categorias]);
    // }
    // public function index($subdomain)
    // {
    //     $categorias = Category::all();
    //     return view('contacts.index',['categorias'=>$categorias]);
    // }

    public function ayuda()
    {
        $categorias = Category::with('subcategoria')->get();
        return view('ayuda.index', ['categorias' => $categorias]);
    }

    // public Function store(){

    //     request()->validate([
    //         'name'=>'required',
    //         'email'=>'required|email',
    //         'mensage'=> 'required|regex:/^[(\\)\\=\\&\\$\\;\\-\\_\\*\\"\\<\\>\\?\\¿\\!\\¡\\:\\,\\.\\0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i',
    //     ]);

    //     $contacto = new Contact();
    //     $contacto->nombre = request('name');
    //     $contacto->correo = request('email');
    //     $contacto->mensage = request('mensage');
    //     $contacto->save();

    //     return redirect("contacts")->with("ok-crear", "");

    // }
    

    public function subscribe(Request $request)
    {
            $request->validate([
                'nombre'=>'required',
                'correo'=>'required|email|unique:contacts',
                'mensage'=> 'required|regex:/^[(\\)\\=\\&\\$\\;\\-\\_\\*\\"\\<\\>\\?\\¿\\!\\¡\\:\\,\\.\\0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i',
            ]);
            $contacto = new Contact();
            $contacto->nombre = $request->nombre;
            $contacto->correo = $request->correo;
            $contacto->mensage = $request->mensage;
            $contacto->save();

            return response()->json(['code'=>200, 'message'=>'ok Created','data' => $contacto], 200);



            // $contacto->nombre = request('name');
            // $contacto->correo = request('email');
            // $contacto->mensage = request('mensage');
            
            // Contact::create($request->all());
            // return response()->json([
            //     'mensage'=>'Ok'
            // ]);
        
    }
}
