<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\persona;

class ShowDatos extends Component
{   public $eliminar='';
    public $mensaje='';
    public function render()
    {   
    	$personas=persona::all();
        return view('livewire.show-datos',compact('personas'));
    }

    public function eliminarPersona(persona $id)
    {
      $this->eliminar=$id;
      
    }
    public function destroy()
    {
    	$resul=$this->eliminar->delete();
    	\Session::flash('eliminar','Registro '.$this->eliminar->nombre.' '. 'eliminado'); 
    }

   /* public function registro_personas(Request $request)
    {
    	//return $request->all();
    	$resul=persona::create([
         'nombre'=>$request->get("nombre"),
        'apellidos'=>$request->get("apellidos"),
        'telefono'=>$request->get("telefono"),
        'tarjeta'=>$request->get("tarjeta"),
        'fecha_nacimiento'=>$request->get("fecha"),
        'edad'=>$request->get("edad"),
    	]);
    	if($resul!=[])
    	{
    	  \Session::flash('mensaje',$request->get("nombre").' '.'Registrado');
    	  return view("crud.registro");	
    	}
    
    }*/
}
