<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('cliente.login');
    }

    public function login(Request $request)
    {
        // Validación básica
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Lógica de autenticación (simplificada)
        if ($request->email === 'admin@divinopan.com' && $request->password === 'password') {
            // Autenticación exitosa
            return redirect()->route('admin.dashboard');
        }

        // Autenticación fallida
        return back()->withErrors([
            'email' => 'Credenciales incorrectas',
        ]);
    }
}
