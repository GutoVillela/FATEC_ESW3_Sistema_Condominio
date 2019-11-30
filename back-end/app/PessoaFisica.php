<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PessoaFisica extends Model
{
    public function pessoa(){
        return $this->morphOne(Pessoa::class, 'pessoable');
    }
}
