<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('licitaciones', function (Blueprint $table) {
            $table->id();
            $table->string('numero_cotizacion');
            $table->longText('nombre_cotizacion');
            $table->string('sku_producto');
            $table->string('nombre_producto'); 
            $table->string('organismo_publico');
            $table->string('proveedor_adjudicado')->nullable();
            $table->string('fecha_adjudicado')->nullable();
            $table->string('status')->nullable();
            $table->string('orden_compra')->nullable();
            $table->string('estado_aphix')->nullable();
            $table->longText('comentario')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licitaciones');
    }
};
