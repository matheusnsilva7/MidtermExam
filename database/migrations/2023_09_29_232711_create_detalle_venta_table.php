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
        Schema::create('detalle_venta', function (Blueprint $table) {
            $table->id('iddetalle_venta');
            $table->unsignedBigInteger('idventa');
            $table->unsignedBigInteger('iddetalle_ingreso');
            $table->integer('cantidad');
            $table->decimal('precio_venta', 10, 2);
            $table->decimal('descuento', 10, 2);
            $table->timestamps();

            $table->foreign('idventa')->references('idventa')->on('venta');
            //$table->foreign('iddetalle_ingreso')->references('iddetalle_ingreso')->on('detalle_ingreso');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_venta');
    }
};
