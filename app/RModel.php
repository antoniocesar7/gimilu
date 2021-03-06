<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RModel extends Model
{
    protected $primaryKey = "id";
    public $timestamps = true; // created_at e updated_at
    public $incrementing = true;
    protected $fillable = [];

    public function beforeSave(){
        return true;
    }
    public function save(array $options = []){
        try{
            if(!$this->beforeSave()){
                return false;
            }
            return parent::save($options);
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

}