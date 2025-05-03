<!-- admin/stock.blade.php -->
@extends('layouts.admin_layout')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Gestión de Inventario</h1>
    <div>
        <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#nuevoProductoModal">
            <i class="bi bi-plus-circle"></i> Nuevo Producto
        </button>
        <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#nuevaCategoriaModal">
            <i class="bi bi-collection"></i> Nueva Categoría
        </button>
    </div>
</div>

<div class="row mb-4">
    <div class="col-md-3">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <h5 class="card-title">Panes</h5>
                <p class="card-text h4">15 productos</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-success text-white">
            <div class="card-body">
                <h5 class="card-title">Bebidas</h5>
                <p class="card-text h4">24 productos</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-warning text-dark">
            <div class="card-body">
                <h5 class="card-title">Especiales</h5>
                <p class="card-text h4">18 productos</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-info text-white">
            <div class="card-body">
                <h5 class="card-title">Total</h5>
                <p class="card-text h4">57 productos</p>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Producto</th>
                        <th>Categoría</th>
                        <th>Stock</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PAN-001</td>
                        <td>Pan Integral</td>
                        <td><span class="badge bg-primary">Panes</span></td>
                        <td class="text-success">45 unidades</td>
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

<!-- Modales para inventario -->
<div class="modal fade" id="nuevoProductoModal">
    <!-- Contenido del modal -->
</div>

<div class="modal fade" id="nuevaCategoriaModal">
    <!-- Contenido del modal -->
</div>

@section('scripts')
<script>
    // Scripts para gestión de inventario
</script>
@endsection
@endsection