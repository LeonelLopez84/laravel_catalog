<?php

namespace Catalogo\Entities;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';
    public $timestamps = false;

    public function getEjecutivo()
    {
        return $this->belongsTo('Catalogo\Entities\Ejecutivos','EjecutivoAtiende','ID');
    }

    public function getEstado()
    {
        return $this->belongsTo('Catalogo\Entities\Estados','Estado','ID');
    }

    public function getPais()
    {
        return $this->belongsTo('Catalogo\Entities\Pais','Pais','ID');
    }
}
