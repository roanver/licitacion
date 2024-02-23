<?php


namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use App\Models\Licitacion;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DescartadasSheet implements FromCollection, WithTitle, WithHeadings, ShouldAutoSize
{
    use Exportable;
   public function collection(){

    $descartadas= Licitacion::where('estado_aphix', 'descartar')
    ->orderBy('updated_at', 'desc')->select('estado_aphix', 'comentario', 'numero_cotizacion', 'nombre_cotizacion', 'nombre_producto','organismo_publico','proveedor_adjudicado','fecha_adjudicado', 'status')
    ->get();

    return $descartadas;

   }

   public function title(): string{
    return 'Descartadas'; 
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

