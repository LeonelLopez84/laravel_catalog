<?php

namespace Catalogo\Entities;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    protected $table = 'estados';
    public $timestamps = false;

    public function Clientes()
    {
        return $this->hasMany('Catalogo\Entities\Clientes','Estado','ID');
    }
}
