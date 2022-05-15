<?php

namespace App\Http\Controllers;
use App\Models\Pedido;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    //
    public function getPedidos() {
        return Pedido::all();
    }

    public function listPedidos() {
        return view("pedidos.list", ["pedidos" => Pedido::all()]);
    }

    public function newPedido() {
        return view("pedidos.new");
    }

    public function postPedido(Request $request) {
        Pedido::create([
            "menu" => $request->menu,
            "cliente" => $request->cliente,
            "quantity" => $request->quantity,
            "totalprice" => $request->totalprice,
            
        ]);
        return view("pedidos.list", ["pedidos" => Pedido::all()]);
    }

    public function putPedido(Request $request) {
        $pedido = Menu::where(["id" => $request->id])->first();
        $pedido->menu = $request->menu;
        $pedido->cliente = $request->cliente;
        $pedido->quantity = $request->quantity;
        $pedido->totalprice = $request->totalprice;
        
        $professor->update();
        return view("menus.list", ["menu" => Menu::all()]);
    }

    public function deletePedido(Request $request) {
        $pedido = Pedido::where(["id" => $request->id])->first();
        $pedido->delete();
        return view("pedidos.list", ["pedidos" => Pedido::all()]);
    }

    public function editPedido($id) {
        $menu = Pedido::where(["id" => $id])->first();
        return view("pedidos.edit", ["pedido" => $menu]);
    }
}
