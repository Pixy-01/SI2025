<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Dashboard
    public function dashboard() {
        return view('admin.dashboard');
    }

    // Usuarios
    public function usuarios() {
        return view('admin.usuarios'); // Asegúrate de tener esta vista
    }

    // Roles
    public function roles() {
        return view('admin.roles'); // Asegúrate de tener esta vista
    }

    // Stock/Inventario
    public function stock() {
        return view('admin.stock'); // Asegúrate de tener esta vista
    }

    public function pedidos() {
        return view('admin.pedidos'); // Asegúrate de tener esta vista
    }
}
