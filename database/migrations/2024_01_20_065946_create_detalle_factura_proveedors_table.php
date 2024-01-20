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
        Schema::create('facturas_proveedor_d', function (Blueprint $table) {
            $table->id();
            $table->foreignId('factura_proveedor_id')->constrained('facturas_proveedor');
            $table->foreignId('producto_id')->constrained('productos');
            $table->integer('cantidad');
            $table->decimal('precio_compra', 10, 2);
            $table->foreignId('marca_id')->nullable()->constrained('marcas');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_factura_proveedors');
    }
};
