<?php

namespace App\Http\Controllers;
use App\Fotografo;
use Illuminate\Http\Request;

class FotografoController extends Controller
{
    public function inicio(){
        return view('fotografo.fotografo');
    }

    public function agregarFotografia(){
        return view('fotografo.fotografia');
    }

    public function consultarVenta(){
        return view('fotografo.venta');
    }

    public function guardarFotografia(Request $request){
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
            return $name;

            $fotografo= new Fotografo();

            $fotografo->tematica= $request->tematica;
            $fotografo->camara = $request->camara;
            $fotografo->precio = $request->precio;
            $fotografo->descripcion = $request->descripcion;
            $fotografo->rutaFoto = $name;
            $fotografo-> save();

            return redirect('/fotografo');
        }
        
    }
    public function formCrear(){
        return view('registro-fotografo');
    }

    public function guardar(Request $request){
        $fotografo = new Fotografo();
        $fotografo->nombre = $request->nombre;
        $fotografo->apellidoPaterno = $request->apellidoP;
        $fotografo->apellidoMaterno = $request->apellidoM;
        $fotografo->email =  $request->correo;
        $fotografo->telefono =  $request->telefono;
        $fotografo->direccion =  $request->direccion;
        $fotografo->rutaCurriculum =  $request->rutaCurriculum;
        $fotografo->nivel =  '0';
        $fotografo->estado =  'en espera';
        if($request->password == $request->password2){
            $fotografo->password =  $request->password;
            $fotografo->save();
            return redirect('/login');
        }
        else{
            return redirect('/registro-fotografo');
        }
        
    }

    public function getFormEdit($id){
        $fotografo =  Fotografo::find($id);
        return view('edit-info-fotografo',compact('fotografo'));
    
    }

    public function actualizar(Request $request, $id){
        $fotografo = Fotografo::find($id);
        $fotografo->nombre = $request->nombre;
        $fotografo->apellidoPaterno = $request->apellidoP;
        $fotografo->apellidoMaterno = $request->apellidoM;
        $fotografo->email =  $request->correo;
        $fotografo->telefono =  $request->telefono;
        $fotografo->direccion =  $request->direccion;
        if($request->password == $request->password2){
            $fotografo->password =  $request->password;
            $fotografo->update();
            return redirect('/fotografo');
        }
        else{
            return redirect('editar-fotografo/{id}');
        }
    }
    
    public function getLogin(){
        return view('loginFotografo');
    }

    public function getVerificationLogin(Request $request){
        $fotografo = Fotografo::all();

        foreach ($fotografo as $item) {
            if($item->email == $request->correo){
                if($item->estado==='en espera'){
                    return redirect('/login');
                }
                else{
                    if($item->password == $request->password){
                        return redirect('/fotografo');
                    }
                    else{
                        echo("<script> alert('incorrecto'); </script>");
                        return redirect('/login');
                    }
                }
            }
        }
        return redirect('/login');
    }

    public function getSolicitudes(){
        $fotografo = Fotografo::where('estado', 'en espera')->get();
        return view('fotografo.solicitud',compact('fotografo'));
    }
    public function update( $id){
        $fotografo = Fotografo::find($id);
        $fotografo->estado = 'aceptado';
        $fotografo->update();
        return redirect('solicitudes');
    }
    public function eliminar($id){
        $fotografo = Fotografo::find($id);
        if($fotografo->estado==='en espera'){
            $fotografo->delete();
            return redirect('solicitudes');
        }
        else{
            $fotografo->delete();
            return redirect('/verLista');
        }
        
    }

    public function listaFotografos(){
        $fotografo = Fotografo::all();
        return view('ListaFotografos',compact('fotografo'));
       }
   
    public function bajarFotografo($id){
        $fotografo = Fotografo::all();
        $fotografo2 = Fotografo::find($id);
        $fotografo2->nivel = $fotografo2->nivel -1;
        $fotografo2->update();
        return redirect('verLista');
    }

    public function subirFotografo($id){
        $fotografo = Fotografo::all();
        $fotografo2 = Fotografo::find($id);
        $fotografo2->nivel = $fotografo2->nivel +1;
        $fotografo2->update();
        return redirect('verLista');
    }
}
