<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class LicitacionesExport implements WithMultipleSheets
{

    use Exportable;
    /**
     * @return array
     */
    public function sheets(): array
    {
        
        $sheets[] = new PublicadasSheet();

        $sheets[] = new ParticipandoSheet();
        $sheets[] = new FinalizadasSheet();
        $sheets[] = new DescartadasSheet();

        return $sheets;
    }
}
