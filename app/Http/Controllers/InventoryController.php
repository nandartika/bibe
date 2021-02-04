<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        // $data=new MenuModel();
        // $collection=$data->all();
        $titleBar = "Inventory";
        return view("inventory.index", compact('titleBar'));
    }

    public function create()
    {
        // $data=new MenuModel();
        // $collection=$data->all();
        $titleBar = "Inventory";
        return view("inventory.create", compact('titleBar'));
    }
}
