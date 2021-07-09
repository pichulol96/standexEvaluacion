<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;

class personaController extends Controller
{
    public function get_personas()
    {
        $personas=persona::all();
        
    	return view("crud/consultas",compact('personas'));
    }

    public function registro_personas(Request $request)
    {
    	
    	$resul=persona::create([
         'nombre'=>$request->get("nombre"),
        'tarjeta'=>$request->get("tarjeta"),
        'fecha_nacimiento'=>$request->get("fecha"),
        'canal'=>$request->get("canal"),
    	]);
    	if($resul!=[])
    	{
    	  //\Session::flash('mensaje',$request->get("nombre").' '.'Registrado');
    	  return ;	
    	}
    
    }

    public function delete_persona(persona $id)
    {
     $resul=$id->delete();
     if($resul>0)
     { 
     	\Session::flash('accion','Registro '.$id->nombre.' '. 'eliminado');
     	return redirect()->route('consultas');
     }
      
    }

    public function editar_persona(Request $request)
    {   
        $idpersona=$request->get('id');
        $nombre=$request->get('nombre');
        $fecha=$request->get('fecha');
        $tarjeta=$request->get('tarjeta');
        $canal=$request->get('canal');
        $resul=persona::where("id", $idpersona)
        ->update([
            "nombre" => "$nombre",
            "fecha_nacimiento"=>"$fecha",
            "tarjeta"=>"$tarjeta",
            "canal"=>"$canal",
        ]);

        \Session::flash('accion','Registro '.$nombre.' '. 'actualizado');
        return redirect()->route('consultas');
    }
}
