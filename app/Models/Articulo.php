<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $table = 'articulo';

    protected $fillable = [
        'idarticulo',
        'codigo',
        'nombre',
        'descripcion',
        'imagen',
        'idcategoria',
        'idpresentacion',
    ];
}
