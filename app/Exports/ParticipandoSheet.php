<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\Exportable;
use App\Models\Licitacion;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize; 

class ParticipandoSheet implements FromCollection, WithTitle, WithHeadings, ShouldAutoSize
{
   use Exportable;
   
   public function collection(){

    return Licitacion::where('estado_aphix', 'participando')
    ->whereIn('status', ['Publicada', 'Evaluacion'])->select('estado_aphix', 'comentario', 'numero_cotizacion', 'nombre_cotizacion', 'nombre_producto','organismo_publico','proveedor_adjudicado','fecha_adjudicado', 'status')
    ->get();

   }

   public function title(): string{
    return 'Participando'; 
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
