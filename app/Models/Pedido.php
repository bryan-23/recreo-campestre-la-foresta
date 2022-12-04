<?php

namespace App\Models;

use App\Models\Mesa;
use App\Models\Detalle;
use App\Models\Cliente;
use App\Models\Mesero;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{    
    use HasFactory;
    protected $table='pedido';
    protected $fillable=[
        'monto','mesa_id','id'
    ];
    
    public function mesas(){
        return $this->belongsTo(Mesa::class);
    }

    public function detallespedidos(){
        return $this->hasMany(Detalle::class);
    }
    
    public function clientes(){
        return $this->belongsTo(Cliente::class, 'id');
    }

    public function meseros(){
        return $this->belongsTo(Mesero::class);
    }
}