<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorias1 extends Model
{
    use HasFactory;
    public $table='categorias';
    public $timestamps=false;
    protected $fillable=['category','imagen','estado'];
}
