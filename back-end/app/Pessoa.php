<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    //Polimorfismo para pessoa
    public function pessoable()
    {
        return $this->morphTo();
    }
}
