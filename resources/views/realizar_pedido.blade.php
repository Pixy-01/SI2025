<!-- realizar_pedido.blade.php -->
@extends('layout')

@section('content')
<div class="hero-section text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Nuestro Menú</h1>
        <p class="lead">Selecciona tus productos favoritos</p>
    </div>
</div>

<div class="container">
    <div class="row mb-5">
        <div class="col-md-3">
            <div class="card category-card text-center p-4" onclick="filterCategory('panes')">
                <i class="bi bi-bread-slice fs-1 text-primary"></i>
                <h5 class="mt-3">Panes y Empanadas</h5>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card category-card text-center p-4" onclick="filterCategory('masas')">
                <i class="bi bi-egg-fried fs-1 text-success"></i>
                <h5 class="mt-3">Masas Típicas</h5>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card category-card text-center p-4" onclick="filterCategory('especiales')">
                <i class="bi bi-star fs-1 text-warning"></i>
                <h5 class="mt-3">Especiales</h5>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card category-card text-center p-4" onclick="filterCategory('bebidas')">
                <i class="bi bi-cup-straw fs-1 text-info"></i>
                <h5 class="mt-3">Bebidas</h5>
            </div>
        </div>
    </div>

    <h3 class="mb-4" id="category-title">Todos los Productos</h3>
    
    <div class="row" id="productos-container">
        <!-- Producto 1 -->
        <div class="col-md-4" data-category="panes">
            <div class="card product-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Pan con Queso</h5>
                        <span class="badge bg-primary">Panes</span>
                    </div>
                    <p class="card-text">Delicioso pan recién horneado con queso derretido.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-success">$1.50</h5>
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-plus"></i> Agregar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Producto 2 -->
        <div class="col-md-4" data-category="panes">
            <div class="card product-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Empanada de Carne</h5>
                        <span class="badge bg-primary">Panes</span>
                    </div>
                    <p class="card-text">Empanada casera rellena de carne mechada.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-success">$2.00</h5>
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-plus"></i> Agregar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Producto 3 -->
        <div class="col-md-4" data-category="masas">
            <div class="card product-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Arepa con Queso</h5>
                        <span class="badge bg-success">Masas</span>
                    </div>
                    <p class="card-text">Arepa de maíz blanco con queso fundido.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-success">$2.50</h5>
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-plus"></i> Agregar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Producto 4 -->
        <div class="col-md-4" data-category="especiales">
            <div class="card product-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Desayuno Completo</h5>
                        <span class="badge bg-warning text-dark">Especiales</span>
                    </div>
                    <p class="card-text">Pan con queso, café con leche y jugo natural.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-success">$5.50</h5>
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-plus"></i> Agregar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Producto 5 -->
        <div class="col-md-4" data-category="bebidas">
            <div class="card product-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Café Negro</h5>
                        <span class="badge bg-info">Bebidas</span>
                    </div>
                    <p class="card-text">Café recién preparado de grano arábica.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-success">$1.00</h5>
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-plus"></i> Agregar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Producto 6 -->
        <div class="col-md-4" data-category="bebidas">
            <div class="card product-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Jugo Natural</h5>
                        <span class="badge bg-info">Bebidas</span>
                    </div>
                    <p class="card-text">Jugo fresco de naranja, piña o parchita.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-success">$2.00</h5>
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-plus"></i> Agregar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Carrito -->
<div class="modal fade" id="carritoModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tu Pedido</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Subtotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="carrito-items">
                            <!-- Aquí van los items del carrito -->
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="3">Total</th>
                                <th id="carrito-total">$0.00</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Seguir Comprando</button>
                <button type="button" class="btn btn-primary">Finalizar Pedido</button>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
    function filterCategory(category) {
        const products = document.querySelectorAll('#productos-container [data-category]');
        const categoryTitles = {
            'panes': 'Panes y Empanadas',
            'masas': 'Masas Típicas',
            'especiales': 'Especiales',
            'bebidas': 'Bebidas',
            'all': 'Todos los Productos'
        };
        
        document.getElementById('category-title').textContent = 
            category === 'all' ? categoryTitles.all : categoryTitles[category];
        
        products.forEach(product => {
            if (category === 'all' || product.getAttribute('data-category') === category) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    }
    
    // Aquí iría la lógica del carrito de compras
</script>
@endsection
@endsection