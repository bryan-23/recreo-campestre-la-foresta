<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function listar_productos(){
        $lista_productos=Producto::all();
        return view("admin.productos.listar_producto")->with(["lista_productos"=>$lista_productos]);
  
      }

      public function agregar_producto(Request $request){
           Producto::create($request->all());
           return redirect()->route("lista_productos");
        }

}
