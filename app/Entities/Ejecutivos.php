<?php

namespace Catalogo\Entities;

use Illuminate\Database\Eloquent\Model;

class Ejecutivos extends Model
{
     protected $table = 'ejecutivo_ventas';
    public $timestamps = false;

    public function Clientes()
    {
        return $this->hasMany('Catalogo\Entities\Clientes','EjecutivoAtiende','ID');
    }
}
