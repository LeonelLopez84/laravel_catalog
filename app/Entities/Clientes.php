<?php

namespace Catalogo\Entities;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';
    public $timestamps = false;

    public function Ejecutivo()
    {
        return $this->belongsTo('Catalogo\Entities\Ejecutivos','EjecutivoAtiende','ID');
    }
}
