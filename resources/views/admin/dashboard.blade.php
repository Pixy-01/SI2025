<!-- admin/dashboard.blade.php -->
@extends('layouts.admin_layout')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
    <div class="col">
        <div class="card stat-card text-white bg-primary">
            <div class="card-body">
                <h5 class="card-title">Usuarios Registrados</h5>
                <h2 class="card-text">145</h2>
                <i class="bi bi-people fs-1 float-end"></i>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card stat-card text-white bg-success">
            <div class="card-body">
                <h5 class="card-title">Productos en Stock</h5>
                <h2 class="card-text">326</h2>
                <i class="bi bi-box-seam fs-1 float-end"></i>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card stat-card text-white bg-warning">
            <div class="card-body">
                <h5 class="card-title">Pedidos Hoy</h5>
                <h2 class="card-text">42</h2>
                <i class="bi bi-cart-check fs-1 float-end"></i>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Actividad Reciente</h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Nuevo usuario registrado</span>
                        <small class="text-muted">hace 2 min</small>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Stock actualizado - Pan integral</span>
                        <small class="text-muted">hace 15 min</small>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Nuevo rol creado - Cajero</span>
                        <small class="text-muted">hace 1 hora</small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Estadísticas de Ventas</h5>
            </div>
            <div class="card-body">
                <canvas id="salesChart"></canvas>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
    // Scripts para gráficas
</script>
@endsection
@endsection