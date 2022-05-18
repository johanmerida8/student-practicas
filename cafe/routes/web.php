<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;

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
    return view('welcome');
});

Route::get('/menus', [MenuController::class, "getMenus"]);
Route::post('/menus', [MenuController::class, "postMenu"]);
Route::put('/menus', [MenuController::class, "putMenu"]);
Route::delete('/menus', [MenuController::class, "deleteMenu"]);

Route::get('/listmenus', [MenuController::class, "listMenus"]);
Route::get('/newmenu', [MenuController::class, "newMenu"]);
Route::get('/editmenu/{id}', [MenuController::class, "editMenu"]);


Route::get('/clientes', [ClienteController::class, "getClientes"]);
Route::post('/clientes', [ClienteController::class, "postCliente"]);
Route::put('/clientes', [ClienteController::class, "putCliente"]);
Route::delete('/clientes', [ClienteController::class, "deleteCliente"]);

Route::get('/listclientes', [ClienteController::class, "listClientes"]);
Route::get('/newcliente', [ClienteController::class, "newCliente"]);
Route::get('/editcliente/{id}', [ClienteController::class, "editCliente"]);

Route::get('/listpedidos', [PedidoController::class, "listPedidos"]);