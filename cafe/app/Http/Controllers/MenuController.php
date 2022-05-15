<?php

namespace App\Http\Controllers;
use App\Models\Menu;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function getMenus() {
        return Menu::all();
    }

    public function listMenus() {
        return view("menus.list", ["menus" => Menu::all()]);
    }

    public function newMenu() {
        return view("menus.new");
    }

    public function postMenu(Request $request) {
        Menu::create([
            "name" => $request->name,
            "description" => $request->description,
            "quantity" => $request->quantity,
            "price" => $request->price,
            
        ]);
        return view("menus.list", ["menus" => Menu::all()]);
    }

    public function putMenu(Request $request) {
        $menu = Menu::where(["id" => $request->id])->first();
        $menu->name = $request->name;
        $menu->description = $request->description;
        $menu->quantity = $request->quantity;
        $menu->price = $request->price;
        
        $professor->update();
        return view("menus.list", ["menu" => Menu::all()]);
    }

    public function deleteMenu(Request $request) {
        $menu = Menu::where(["id" => $request->id])->first();
        $menu->delete();
        return view("menus.list", ["menus" => Menu::all()]);
    }

    public function editMenu($id) {
        $menu = Menu::where(["id" => $id])->first();
        return view("menus.edit", ["menu" => $menu]);
    }
}
