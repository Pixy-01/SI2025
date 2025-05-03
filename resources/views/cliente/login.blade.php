<!-- login.blade.php -->
@extends('layouts.layout_cliente')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0 text-center">
                        <i class="bi bi-box-arrow-in-right"></i> Iniciar Sesión
                    </h4>
                </div>
                
                <div class="card-body p-4">
                    <!-- Logo y marca -->
                    <div class="text-center mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo Divino Pan" class="mb-3" style="height: 80px;">
                        <h3 class="text-primary">Divino Pan</h3>
                        <p class="text-muted">Ingresa tus credenciales para acceder</p>
                    </div>

                    <!-- Formulario de login -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                   id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                   id="password" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">Recordarme</label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="text-decoration-none" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            @endif
                        </div>
                        
                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-box-arrow-in-right"></i> Ingresar
                            </button>
                        </div>
                    </form>
                    
                    <div class="text-center mt-4">
                        <p class="mb-2">¿No tienes una cuenta?</p>
                        <a href="{{ route('register') }}" class="btn btn-outline-primary">
                            <i class="bi bi-person-plus"></i> Crear cuenta
                        </a>
                    </div>
                    
                    <div class="text-center mt-4">
                        <a href="{{ route('cliente.menu') }}" class="text-decoration-none">
                            <i class="bi bi-arrow-left"></i> Volver al menú principal
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Login con redes sociales -->
            <div class="mt-4 text-center">
                <p class="text-muted mb-3">O ingresa con</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="#" class="btn btn-outline-danger">
                        <i class="bi bi-google"></i> Google
                    </a>
                    <a href="#" class="btn btn-outline-primary">
                        <i class="bi bi-facebook"></i> Facebook
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection