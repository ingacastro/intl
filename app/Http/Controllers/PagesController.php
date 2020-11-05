<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\MailContactanos;
use Mail;

class PagesController extends Controller
{
    public function index(Request $request){
        $query = DB::table('supplies');
        if($request->input('number')) 
            $productos = $query->where('number', 'like', "%".$request->input('number')."%")
            ->orWhere('short_description', 'like', "%".$request->input('number')."%")
            ->orWhere('large_description', 'like', "%".$request->input('number')."%");
        $productos = $query->paginate(20);
        return view('index', compact('productos'));
    }

    public function fabricantes(){
        $fabricantes = DB::table('manufacturers')
        ->whereNotIn('name', ['GENERICO', 'generico', 'Fabricante', 'fabricante', ''])
        ->paginate(20);
        return view('fabricantes', compact('fabricantes'));
    }

    public function fabricante($name){
        $fabricante = DB::table('manufacturers')->where('name', $name)->first();
        $piezas = DB::table('supplies')->where('manufacturers_id', $fabricante->id)->paginate(20);
        return view('fabricante', compact('name', 'piezas'));
    }

    public function producto($number){
        $pieza = DB::table('supplies')->where('number', $number)->first();
        return view('producto', compact('pieza'));
    }

    public function quienesSomos(){
        return view('quienes-somos');
    }

    public function contacto(){
        return view('contacto');
    }

    public function contactanosMail(Request $request)
    {
        $contactanosCall = [
            'nombre' => $request->Name,
            'email' => $request->Email,
            'telefono' => $request->Telephone,
            'asunto' => $request->Subject,
            'mensaje' => $request->Message
        ];
        Mail::to('ingacastro@gmail.com')->send(new MailContactanos($contactanosCall));
        //return "Email enviado";
        return back();
    }
}
