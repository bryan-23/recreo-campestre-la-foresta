<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    //
    public function listar_mesas(){

      $lista_mesas=Mesa::all();
      return view("admin.mesas.lista_mesas")->with(["lista_de_mesas"=>$lista_mesas]);

    }
    public function crear_mesas(Request $request){
         Mesa::create($request->all());
         return redirect()->route("lista_mesass");
      }
      public function listado_mesas(){

        $listado_mesas=Mesa::all();
        return view("admin.platos.index")->with(["listado_mesas"=>$listado_mesas]);
  
      }

}
