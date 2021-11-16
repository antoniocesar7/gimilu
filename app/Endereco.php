<?php

namespace App;



class Endereco extends RModel
{
    protected $table = ['enderecos'];
    protected $fillable = ['logradouro','numero','cidade','estado','cep','complemento'];
    
}
