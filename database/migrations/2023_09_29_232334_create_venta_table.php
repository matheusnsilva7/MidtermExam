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
            Schema::create('venta', function (Blueprint $table) {
                $table->id('idventa');
                $table->unsignedBigInteger('idcliente');
                $table->unsignedBigInteger('idtrabajador');
                $table->date('fecha');
                $table->string('tipo_comprobante');
                $table->string('setie');
                $table->string('correlativo');
                $table->string('igvestado');
                $table->timestamps();
    
                $table->foreign('idcliente')->references('idcliente')->on('clientes');
                $table->foreign('idtrabajador')->references('idtrabajador')->on('trabajadores');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabajadores');
    }
};
