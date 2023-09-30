<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;

    protected $table = 'trabajadores';

    protected $fillable = [
        'idtrabajador',
        'nombre',
        'apellidos',
        'sexo',
        'fecha_nacimiento',
        'num_documento',
        'direccion',
        'telefono',
        'email',
        'acceso',
        'usuario',
        'password',
    ];
}
