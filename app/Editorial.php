<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    //
    protected $table='editorial';
    protected $fillable = [
        'id', 'nombreEditorial', 'correo','contraseña','telefono', 'estadoA'
    ];
}
