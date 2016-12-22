<?php

namespace Catalogo\Entities;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'pais';
    public $timestamps = false;

    public function Clientes()
    {
        return $this->hasMany('Catalogo\Entities\Clientes','Pais','ID');
    }
}


