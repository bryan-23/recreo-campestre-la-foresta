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
        'documento','nombre', 'apellido','razon_social','id'
    ];

    public function pedido(){
        return $this->hasMany('App\Models\Pedido','id');
    }

}
