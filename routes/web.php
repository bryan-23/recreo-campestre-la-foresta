<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ReservaController;
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

    Route::get("/listado_producto", [ProductoController::class, "listado_producto"])->name("listado_productoss");

    Route::get("/producto", [ProductoController::class, "listar_productos"])->name("listar_productos");
    Route::post("/producto", [ProductoController::class, "agregar_producto"])->name("agregar_producto");
    
    Route::get("/agregar_producto", [ProductoController::class, "verAgregarProductos"]);
    Route::post("/agregar_producto", [ProductoController::class, "agregar_producto"])->name("agregar_producto");

    Route::post("/recerva", [ReservaController::class, "store"])->name("recerva.store");
    
});
