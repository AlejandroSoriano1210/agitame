<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    /** @use HasFactory<\Database\Factories\EmpleadoFactory> */
    use HasFactory;

    protected $fillable = [
        'numero',
        'nombre',
        'apellidos',
        'departamento_id',
        'acciones',
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function imagen()
    {
        return $this->morphOne(Imagen::class, 'imaginable');
    }
}
