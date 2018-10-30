<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fotografia extends Model
{
    //
    protected $table='fotografia';
    protected $fillable = [
        'id', 'reporte_id', 'camara','descripcion','editorial_id','fotografo_id'
    ];
}
