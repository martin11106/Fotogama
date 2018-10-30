<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Editorial;
use App\Reporte;
use App\Fotografia;

class EditorialController extends Controller
{
    public function getRegistroEditorial(){
        return view('registroeditorial');
    }

    public function getLoginEditorial(){
        return view('logineditorial');
    }

    public function guardarEditorial(Request $request){
        $editorial = new Editorial;
        $editorial->nombreEditorial=$request->nombre;
        $editorial->correo=$request->correo;
        $editorial->contraseña=$request->password;
        $editorial->telefono=$request->telefono;
        $editorial->estadoA='aceptado';
        $editorial->save();

        return redirect('/');
    }

    public function validarEditorial(Request $request){
        $correcto='no';
        $editorial=Editorial::all();        

        foreach ($editorial as $item) {
            if($request->correo==$item->correo){
                if($request->password==$item->contraseña){
                    $correcto='si';
                    $actual= Editorial::find($item->id);
                }
            }
        }

        if($correcto=='si'){
            return redirect()->to('/inicioeditorial/'.$actual->id);
        }
        else{                        
            echo("<script> alert('Informacion Incorrecta'); </script>");
            return redirect('logineditorial');
        }
    }

    public function getInicioEditorial($id){
        $editorial = Editorial::find($id);
        return view('inicioeditorial',compact('editorial'));
    }

    public function getRegistroReporte($id){
        $editorial = Editorial::find($id);

        return view('crearreporte',compact('editorial'));
    }

    public function guardarReporte(Request $request,$id){
        $reporte = new Reporte;
        $reporte->titulo=$request->titulo;
        $reporte->descripcion=$request->descripcion;
        $reporte->categoria=$request->categoria;
        $reporte->editorial_id=$id;

        $reporte->save();

        return redirect()->to('/inicioeditorial/'.$id);
    }

    public function getReportes($id){
        $reportes = Reporte::all();

        return view('reportegeneral',compact('reportes','id'));
    }

    public function getEnvioFotos($id,$fotografo){
        $reporte=Reporte::find($id);
        
        return view('enviarfotos',compact('id','fotografo','reporte'));
    }

    public function guardarFoto(Request $request,$id,$fotografo){

        $reporte = Reporte::find($id);

        $fotografia = new Fotografia;
        $fotografia->reporte_id=$id;
        $fotografia->camara='default';
        $fotografia->ruta=$request->ruta;
        $fotografia->descripcion=$request->descripcion;
        $fotografia->editorial_id=$reporte->editorial_id;
        $fotografia->fotografo_id=$fotografo;

        $fotografia->save();

        return redirect()->to('/reportegeneral/'.$fotografo);
    }
}
