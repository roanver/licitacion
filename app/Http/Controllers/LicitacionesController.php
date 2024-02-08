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
                $query->orWhereNull('estado_aphix')
                ->orWhereNotIn('estado_aphix', ['descartar', 'participando']);
                 })->get();

       
          //dd($licitaciones);

        return view('licitaciones', compact('licitaciones'));
    }
    public function import(Request $request){

        $request->validate([
            'file' => 'required|file|mimes:csv',
        ]);

        $file = $request->file('file');
        
        $fileContents = file($file->getPathname());

        array_shift($fileContents);
            foreach($fileContents as $line){
                $data = str_getcsv($line);
                //dd($data);
        
                Licitacion::updateOrCreate(
                    ['numero_cotizacion' => trim($data[0]),
                        'nombre_cotizacion' => trim($data[1]),
                        'sku_producto' => trim($data[2]),
                        'nombre_producto' => trim($data[3]),
                        'organismo_publico' => trim($data[4]),
                        'proveedor_adjudicado' => trim($data[5]),
                        'fecha_adjudicado' => trim($data[6]),
                        'status' => trim($data[7]),
                        'orden_compra' => trim($data[8])
                    ]
                );
            }
            return redirect()->back()->with('status', 'Archivo cargado correctamente');
    }
    public function participando(){
        $licitaciones = Licitacion::where('estado_aphix', 'participando')
        ->whereIn('status', ['Publicada', 'Evaluacion'])->get();
            //->where('status','Evaluacion')->get();
        return view('participando', compact('licitaciones'));
    }
    public function descartadas(){  
        $licitaciones = Licitacion::where('estado_aphix', 'descartar')->get();
        return view('licitaciones', compact('licitaciones'));
    }
    public function finalizadas(){
        $licitaciones = Licitacion::where('estado_aphix','participando')
            ->whereIn('status', ['desestimada', 'proveedor'])->get();
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
    public function actualizarEstado(Request $request, $numeroCotizacion){
           
        $estadoAphix = $request->input('estado_aphix');

        //dd($numeroCotizacion, $estadoAphix);

        $licitacion = Licitacion::where('numero_cotizacion', $numeroCotizacion)->first();
            $licitacion->estado_aphix = $estadoAphix;
            $licitacion->save();
        return redirect()->back()->with('success', 'Estado actualizado correctamente');
       
    }

    public function buscador(Request $request, Licitacion $licitacion){

        $busqueda =  $request->Input('buscador');
        $estado = $request->Input('estado_aphix');

        //dd($estado, $busqueda);

        if(is_null($busqueda)){

            return redirect()->route('licitaciones'); 

        }else{
                $licitaciones = $licitacion->where('status', 'Publicada')
                ->where(function($query) use ($busqueda){
                    $query->where('numero_cotizacion',$busqueda)
                            ->orWhere('nombre_cotizacion','LIKE', '%'.$busqueda.'%')
                            ->orWhere('nombre_producto','LIKE', '%'.$busqueda.'%');

                })
                ->get();

                return view('licitaciones', compact('licitaciones', 'busqueda'));

            }  
           
            
        }
    
}  




