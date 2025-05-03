<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;

// Ruta principal (menú)
Route::get('/', [ClienteController::class, 'menu'])->name('cliente.menu');

// Ruta de login simple (sin autenticación real todavía)
Route::get('/login', function() {
    return view('cliente.login');
})->name('login'); // ¡Este nombre es crucial!

// Rutas para el administrador
Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Usuarios (ejemplo)
    Route::get('/usuarios', [AdminController::class, 'usuarios'])->name('usuarios');
    
    // Roles (ejemplo)
    Route::get('/roles', [AdminController::class, 'roles'])->name('roles');
    
    // Inventario/Stock
    Route::get('/stock', [AdminController::class, 'stock'])->name('stock');

    Route::get('/pedidos', [AdminController::class, 'pedidos'])->name('pedidos');
});

// Ruta de login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Ruta de registro (si la necesitas)
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// En web.php
Route::get('/register', function() {
    return view('Cliente.register'); // Necesitarás crear esta vista
})->name('register');

Route::get('/estadop', function () {
    return view('cliente.estadop');
});
