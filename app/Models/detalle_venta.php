<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_venta extends Model
{
    use HasFactory;


    protected $table='detalle_venta';
    protected $primaryKey= 'id';
    protected $filebase = ['id_venta', 'id_producto','preciov','cantidad'];
    public $timestamps=false;

public function Venta (){
    return $this->hasOne(venta::class,'id','id_venta');
} 
public function Producto (){
    return $this->hasOne(producto::class,'id','id_producto');
} 

}
