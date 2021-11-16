<?php

namespace App;



class Usuario extends RModel{
    protected $table = 'usuarios';
    protected $fillable = ['login','password','nome', 'email'];
}
