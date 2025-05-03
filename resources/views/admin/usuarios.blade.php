<!-- admin/usuarios.blade.php -->
@extends('layouts.admin_layout')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Gestión de Usuarios</h1>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoUsuarioModal">
        <i class="bi bi-plus-circle"></i> Nuevo Usuario
    </button>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Filas de usuarios -->
                    <tr>
                        <td>1</td>
                        <td>admin</td>
                        <td>admin@divinopan.com</td>
                        <td><span class="badge bg-danger">Admin</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Nuevo Usuario -->
<div class="modal fade" id="nuevoUsuarioModal">
    <!-- Contenido del modal -->
</div>

@section('scripts')
<script>
    // Scripts para gestión de usuarios
</script>
@endsection
@endsection