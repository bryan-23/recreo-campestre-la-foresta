<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\MesaPedidoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/main', function () {
        return view('admin.desktop');
    });


    Route::get("/listado_mesas", [MesaController::class, "listado_mesas"])->name("listado_mesass");

    Route::get("/mesa", [MesaController::class, "listar_mesas"])->name("lista_mesass");
    Route::post("/mesa", [MesaController::class, "crear_mesas"])->name("crear_mesass");
    Route::get("/crear_mesa", function () {
        return view('admin.mesas.crear_mesas');
    })->name("crear_mesa");

    Route::get("/producto", [ProductoController::class, "listar_productos"])->name("listar_productos");
    Route::post("/producto", [ProductoController::class, "agregar_producto"])->name("agregar_producto");
    Route::get("/agregar_producto", function () {
        return view('admin.productos.agregar_producto');
    })->name("agregar_producto");
    
    Route::resource("/pedidos",PedidoController::class);
    Route::resource("/mesa.pedido",MesaPedidoController::class);
    
});
