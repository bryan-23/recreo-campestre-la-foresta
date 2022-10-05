<?php

namespace App\Models;

use App\Models\Mesa;
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
    
}