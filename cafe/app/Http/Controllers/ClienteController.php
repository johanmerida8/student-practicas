<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //
    public function getClientes() {
        return Cliente::all();
    }

    public function listClientes() {
        return view("clientes.list", ["clientes" => Cliente::all()]);
    }

    public function newCliente() {
        return view("clientes.new");
    }

    public function postCliente(Request $request) {
        Cliente::create([
            "firstname" => $request->firstname,
            "lastname" => $request->lastname
        ]);
        return view("clientes.list", ["clientes" => Cliente::all()]);
    }

    public function putCliente(Request $request) {
        $cliente = Cliente::where(["id" => $request->id])->first();
        $cliente->firstname = $request->firstname;
        $cliente->lastname = $request->lastname;
        
        $client->update();
        return view("clientes.list", ["cliente" => Cliente::all()]);
    }

    public function deleteCliente(Request $request) {
        $cliente = Cliente::where(["id" => $request->id])->first();
        $cliente->delete();
        return view("clientes.list", ["clientes" => cliente::all()]);
    }

    public function editCliente($id) {
        $cliente = Cliente::where(["id" => $id])->first();
        return view("clientes.edit", ["cliente" => $cliente]);
    }
}
