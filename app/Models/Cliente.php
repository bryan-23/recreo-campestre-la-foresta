<?php

namespace App\Models;

use App\Models\Pedido;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table='cliente';
    protected $fillable=[
        "nombre","apellido"
    ];

    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }
}
