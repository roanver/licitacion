<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Licitacion;

class LicitacionesController extends Controller
{
    public function index(){

        $licitaciones = Licitacion::All();

        return view('licitaciones', compact('licitaciones'));
    }

    public function participando(){
        $licitaciones = Licitacion::where('estado_aphix', 'participando');
        return view('licitaciones', compact('licitaciones'));
    }
    public function finalizadas(){
        $licitaciones = Licitacion::where('estado_aphix', 'participando');
        return view('licitaciones', compact('licitaciones'));
    }
    public function descartadas(){
        $licitaciones = Licitacion::where('estado_aphix', 'participando');
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
        
                Licitacion::updateOrCreate(
                    ['numero_cotizacion' => $data[0]],
                    [
                        'nombre_cotizacion' => $data[1],
                        'sku_producto' => $data[2],
                        'nombre_producto' => $data[3],
                        'organismo_publico' => $data[4],
                        'proveedor_adjudicado' => $data[5],
                        'fecha_adjudicacion' => $data[6],
                        'status' => $data[7],
                        'orden_compra' => $data[8],
                        'estado_aphix' => '',
                        'comentario' => '',
                    ]
                );
            }

        return redirect()->back();
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


