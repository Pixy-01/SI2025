<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function menu() {
        return view('cliente.menu'); 
    }
}
