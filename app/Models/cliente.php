<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table='clientes';
    protected $primaryKey= 'id';
    protected $filebase = ['nombre','apellidos','empresa', 'telefono', 'direccion'];
    public $timestamps=false;

}
