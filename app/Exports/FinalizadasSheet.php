<?php


namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use App\Models\Licitacion;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class FinalizadasSheet implements FromCollection, WithTitle, WithHeadings, ShouldAutoSize
{
   use Exportable;
   public function collection(){

    return Licitacion::where('estado_aphix', 'participando')
    ->whereIn('status', ['desestimada', 'proveedor'])->select('estado_aphix', 'comentario', 'numero_cotizacion', 'nombre_cotizacion', 'nombre_producto','organismo_publico','proveedor_adjudicado','fecha_adjudicado', 'status')
    ->get();

   }

   public function title(): string{
    return 'Finalizadas'; 
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
