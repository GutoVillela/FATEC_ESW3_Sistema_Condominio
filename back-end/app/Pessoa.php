<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    public function pessoable(){//Polimorfismo
        return $this->morphTo();
    }
}
