<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MesaController;
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
    Route::get('/Platos', function () {
        return view('admin.Platos.index');
    });
    Route::get("/mesa", [MesaController::class, "listar_mesas"])->name("lista_mesass");
    Route::post("/mesa", [MesaController::class, "crear_mesas"])->name("crear_mesass");
    Route::get("/crear_mesa", function () {
        return view('admin.mesas.crear_mesas');
    })->name("crear_mesa");
});
