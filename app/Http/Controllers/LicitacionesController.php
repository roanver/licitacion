<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Licitacion;

class LicitacionesController extends Controller
{
    public function index(){

        $licitaciones = Licitacion::where('status', 'Publicada')
        ->where('estado_aphix', '')
        ->where('estado_aphix', '!=', 'descartado')
        ->where('estado_aphix', '!=', 'participando')->get();
        return view('licitaciones', compact('licitaciones'));
    }


   

    public function import(Request $request){

        $file = $request->file('file');
        $fileContents = file($file->getPathname());

        array_shift($fileContents);

        

        // foreach($fileContents as $line){
        //     $data = str_getcsv($line);
            // $licitacion = new Licitacion();

            //     $licitacion->numero_cotizacion = $data[0] ;
            //     $licitacion->nombre_cotizacion = $data[1];
            //     $licitacion->sku_producto = $data[2];
            //     $licitacion->nombre_producto =$data[3];
            //     $licitacion->organismo_publico = $data[4];
            //     $licitacion->proveedor_adjudicado = $data[5];
            //     $licitacion->fecha_adjudicacion =$data[6];
            //     $licitacion->status = $data[7];
            //     $licitacion->orden_compra = $data[8];
            //     $licitacion->estado_aphix = '';
            //     $licitacion->comentario = '';

            // $licitacion->save();

            foreach($fileContents as $line){
                $data = str_getcsv($line);


                //$numero = \App\Http\Controllers\LicitacionesController::eliminar_tildes($data[0]);
                //$nombre = strtolower(\App\Http\Controllers\LicitacionesController::eliminar_tildes($data[1]));
                //$sku = \App\Http\Controllers\LicitacionesController::eliminar_tildes($data[2]);
                //$nombre2 = strtolower(\App\Http\Controllers\LicitacionesController::eliminar_tildes($data[3]));
                //$organismo = strtolower(\App\Http\Controllers\LicitacionesController::eliminar_tildes($data[4]));
                //$proveedor = strtolower(\App\Http\Controllers\LicitacionesController::eliminar_tildes($data[5]));
                //$fecha = \App\Http\Controllers\LicitacionesController::eliminar_tildes($data[6]);
                //$status = strtolower(\App\Http\Controllers\LicitacionesController::eliminar_tildes($data[7]));
                //$orden = strtolower(\App\Http\Controllers\LicitacionesController::eliminar_tildes($data[8]));
                     
        
                Licitacion::updateOrCreate(
                    ['numero_cotizacion' => \App\Http\Controllers\LicitacionesController::eliminar_tildes($data[0])],
                    [
                        'nombre_cotizacion' => strtolower(\App\Http\Controllers\LicitacionesController::eliminar_tildes($data[1])),
                        'sku_producto' => \App\Http\Controllers\LicitacionesController::eliminar_tildes($data[2]),
                        'nombre_producto' => strtolower(\App\Http\Controllers\LicitacionesController::eliminar_tildes($data[3])),
                        'organismo_publico' => strtolower(\App\Http\Controllers\LicitacionesController::eliminar_tildes($data[4])),
                        'proveedor_adjudicado' => strtolower(\App\Http\Controllers\LicitacionesController::eliminar_tildes($data[5])),
                        'fecha_adjudicacion' => \App\Http\Controllers\LicitacionesController::eliminar_tildes($data[6]),
                        'status' =>  strtolower(\App\Http\Controllers\LicitacionesController::eliminar_tildes($data[7])),
                        'orden_compra' => strtolower(\App\Http\Controllers\LicitacionesController::eliminar_tildes($data[8])),
                        
                    ]

                );
            }

        return redirect()->back();
    }
    
    function eliminar_tildes($cadena){
        
            $cadena = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $cadena
        );
        $cadena = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $cadena );
        $cadena = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $cadena );
        $cadena = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $cadena );
    
        $cadena = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $cadena );
    
        $cadena = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C'),
            $cadena
        );
    
        return $cadena;
    }


    public function participando(){
        $licitaciones = Licitacion::where('status', 'Publicada')
            ->where('estado_aphix', 'participando')->get();
        return view('participando', compact('licitaciones'));
    }
    public function descartadas(){
        $licitaciones = Licitacion::where('estado_aphix', 'descartada')->get();
        return view('licitaciones', compact('licitaciones'));
    }
    public function finalizadas(){
        $licitaciones = Licitacion::where('estado_aphix', 'participando')
            ->where('status', 'desestimada')
            ->orWhere('status', 'proveedor')->get();
        return view('licitaciones', compact('licitaciones'));
    }

    public function update(Request $request){

        $codigo = $request->Input('codigo');
        $comentario = $request->Input('comentario');
        $estado = $request->Input("status");

        $licitacion = Licitacion::where('numero_cotizacion',$codigo)->first();
        $licitacion->estado_aphix = $estado;
        $licitacion->comentario = $comentario; 
        $licitacion->save();
        return redirect()->back();
    }
}


