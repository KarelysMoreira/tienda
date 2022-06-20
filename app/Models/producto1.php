<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto1 extends Model
{
    use HasFactory;
    public $table='productos';
    public $timestamps=false;
    protected $fillable=['producto','imagen','estado','precio','id_categoria'];
}
