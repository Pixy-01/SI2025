<!-- login.blade.php -->
@extends('layout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0 text-center">
                        <i class="bi bi-box-arrow-in-right"></i> Iniciar Sesión
                    </h4>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="https://via.placeholder.com/100" alt="Logo Divino Pan" class="mb-3">
                        <h3>Divino Pan</h3>
                    </div>
                    
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Recordarme</label>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-box-arrow-in-right"></i> Ingresar
                            </button>
                        </div>
                    </form>
                    
                    <hr class="my-4">
                    
                    <div class="text-center">
                        <p class="mb-2">¿No tienes una cuenta?</p>
                        <a href="#" class="btn btn-outline-primary">
                            <i class="bi bi-person-plus"></i> Registrarse
                        </a>
                        <p class="mt-3">
                            <a href="#">¿Olvidaste tu contraseña?</a>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-3">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-secondary">
                        <i class="bi bi-google"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                        <i class="bi bi-facebook"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                        <i class="bi bi-twitter"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection