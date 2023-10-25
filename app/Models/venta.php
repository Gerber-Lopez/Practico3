<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;

    protected $table='ventas';
    protected $primaryKey= 'id';
    protected $filebase = ['id_cliente','fecha'];
    public $timestamps=false;

public function Cliente (){
    return $this->hasOne(cliente::class,'id','id_cliente');
}   
}
