<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    use HasFactory;
    public $table='ventas';
    public $timestamps=false;
    protected $fillable=['date','estado','id_cliente'];
}
