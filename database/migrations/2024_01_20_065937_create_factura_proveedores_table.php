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
        Schema::create('factura_proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('numero_factura', 50);
            $table->dateTime('fecha_factura');
            $table->decimal('monto_total', 10, 2);
            $table->decimal('saldo_pendiente', 10, 2)->nullable();
            $table->string('metodo_pago')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factura_proveedores');
    }
};
