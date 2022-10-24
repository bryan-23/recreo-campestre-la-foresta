<?php

namespace App\Models;

use App\Models\Mesa;
use App\Models\Detalle;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{    
    use HasFactory;
    protected $table='pedido';
    protected $fillable=[
        "monto","mesa_id"
    ];
    
    public function mesas(){
        return $this->belongsTo(Mesa::class);
    }

    public function detallespedidos(){
        return $this->hasMany(Detalle::class);
    }
    
}