<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\Exportable;
use App\Models\Licitacion;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PublicadasSheet implements FromCollection, WithTitle, WithHeadings, ShouldAutoSize
{
   use Exportable;
   public function collection(){

    return Licitacion::where('status', 'Publicada')
                              ->where(function ($query) {
                                $query->orWhereNull('estado_aphix')
                                      ->orWhereNotIn('estado_aphix', ['descartar', 'participando']);
                            })->select('estado_aphix', 'comentario', 'numero_cotizacion', 'nombre_cotizacion', 'nombre_producto','organismo_publico','proveedor_adjudicado','fecha_adjudicado', 'status')
                            ->get();

   }

   public function title(): string{
    return 'Publicadas'; 
   }

   public function headings(): array
    {
        return [
            'estado_aphix',
            'comentario',
            'numero_cotizacion',
            'nombre_cotizacion',
            'nombre_producto',
            'organismo_publico',
            'proveedor_adjudicado',
            'fecha_adjudicado', 
            'status'
            
        ];
    }
}
