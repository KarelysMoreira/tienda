<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrito1 extends Model
{
    use HasFactory;
    public $table='cars';
    public $timestamps=false;
    protected $fillable=['cantidad','total','estado','id_ventas','id_producto'];
}
