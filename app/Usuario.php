<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;

class Usuario extends RModel implements Authenticatable{

    protected $table = 'usuarios';
    protected $fillable = ['login','password','nome', 'email'];

    public function getAuthIdentifierName(){
        return $this->getKey();//retornando a própria chave para identificar o nome do objeto
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier(){
        return $this->login;//Retornar a identificação do usuário

    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword(){
        return $this->password;

    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken(){

    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value){

    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName(){

    }

    
}
