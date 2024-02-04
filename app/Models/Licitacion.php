<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licitacion extends Model
{
    use HasFactory;

    protected $table = 'licitaciones';
    protected $fillable = [
        'numero_cotizacion', 
        'nombre_cotizacion', 
        'sku_producto', 
        'nombre_producto', 
        'organismo_publico', 
        'proveedor_adjudicado', 
        'fecha_adjudicado',
        'status', 
        'orden_compra',
        'estado_aphix', 
        'comentario'
    ];
    protected $guarder = []; 
}
