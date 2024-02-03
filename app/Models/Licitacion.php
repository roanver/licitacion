<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licitacion extends Model
{
    use HasFactory;

    protected $table = 'licitaciones';
    protected $fillable = ['numero cotizacion', 'nombre cotizacion', 'sku producto', 'nombre producto', 'organismo publico', 'proveedor adjudicado', 'fecha en que se adjudico', 'status', 'orden de compra', 'estado_aphix', 'comentario'];

    protected $guarder = []; 
}
