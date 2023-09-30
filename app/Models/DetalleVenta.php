<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;
    protected $table = 'detalle_venta';

    protected $fillable = [
        'idventa',
        'iddetalle_ingreso',
        'cantidad',
        'precio_venta',
        'descuento',
    ];
}
