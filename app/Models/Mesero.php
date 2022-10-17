<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesero extends Model
{    
    use HasFactory;
    protected $table='mesero';
    protected $fillable=[
        "id","Nombre","Apellido","DNI"
    ];
}
