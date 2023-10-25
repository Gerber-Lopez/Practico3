<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    protected $table='productos';
    protected $primaryKey= 'id';
    protected $filebase = ['id_categoria','descripcion','precio'];
    public $timestamps=false;

public function Categoria (){
    return $this->hasOne(categoria::class,'id','id_categoria');
}   
}
