<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fotografo extends Model
{
    protected $table = 'fotografo';
    protected $fillable = [
        'nombre', 'apellidoPaterno', 'apellidoMaterno', 'email', 'telefono', 'direccion','rutaCurriculum', 'password', 'estado', 'nivel'
    ];
}
