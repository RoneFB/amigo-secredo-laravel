<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $tabela = 'pessoa';
    protected $campos = ['nome', 'email'];
    public $timestamps = true;
    
    public function setNomeAttribute($value){
        $this->attributes['nome'] = $value;
    }

    public function setEmailAttribute($value){
        $this->attributes['email'] = $value;
    }

}
