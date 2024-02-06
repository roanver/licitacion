<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Licitacion;

class LicitacionesController extends Controller
{
    public function index(){

        $licitaciones = Licitacion::where('status', 'Publicada')
            ->where(function ($query) {
                $query->where('estado_aphix', '')
                ->orWhereNull('estado_aphix')
                ->orWhereNotIn('estado_aphix', ['descartado', 'participando']);
                 })->get();


        return view('licitaciones', compact('licitaciones'));
    }


   

    public function import(Request $request){

        $file = $request->file('file');
        $fileContents = file($file->getPathname());

        array_shift($fileContents);


            foreach($fileContents as $line){

                $data = str_getcsv($line);

                //dd($data);
        
                Licitacion::updateOrCreate(
                    ['numero_cotizacion' => $data[0],
                        'nombre_cotizacion' => $data[1],
                        'sku_producto' => $data[2],
                        'nombre_producto' => $data[3],
                        'organismo_publico' => $data[4],
                        'proveedor_adjudicado' => $data[5],
                        'fecha_adjudicado' => $data[6],
                        'status' => $data[7],
                        'orden_compra' =>$data[8]
                        
                    ]

                );
            }

        return redirect()->back();
    }
    

    public function participando(){
        $licitaciones = Licitacion::where('status', 'Publicada')
            ->where('estado_aphix', 'participando')->get();
        return view('participando', compact('licitaciones'));
    }
    public function descartadas(){   //arreglar validacion
        $licitaciones = Licitacion::where('estado_aphix', 'descartar')->get();
        return view('licitaciones', compact('licitaciones'));
    }
    public function finalizadas(){
        $licitaciones = Licitacion::where('estado_aphix', 'participando')
            ->where('status', 'desestimada')
            ->orWhere('status', 'proveedor')->get();
        return view('licitaciones', compact('licitaciones'));
    }



    public function comentario(Request $request, $numeroCotizacion){

        $comentario = $request->Input('comentario');
        //dd($numeroCotizacion, $comentario);

        $licitacion = Licitacion::where('numero_cotizacion',$numeroCotizacion)->first();
        $licitacion->comentario = $comentario; 
        $licitacion->save();
        return redirect()->back();
    }

    public function actualizarEstado(Request $request, $numeroCotizacion)
    {
           
        $estadoAphix = $request->input('estado_aphix');

        //dd($numeroCotizacion, $estadoAphix);

        $licitacion = Licitacion::where('numero_cotizacion', $numeroCotizacion)->first();
        

            $licitacion->estado_aphix = $estadoAphix;
            $licitacion->save();

        
        return redirect()->back()->with('success', 'Estado actualizado correctamente');
       
    }
    
}


