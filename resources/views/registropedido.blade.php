<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Pedidos - Cafetería</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .category-btn {
            transition: all 0.3s;
        }
        .category-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .order-item {
            border-left: 4px solid #0d6efd;
        }
        .badge-status {
            font-size: 0.8rem;
            padding: 0.35rem 0.6rem;
        }
        .tab-content {
            background: #f8f9fa;
            min-height: calc(100vh - 120px);
            padding: 20px;
            border-radius: 0 0 10px 10px;
        }
        .nav-tabs .nav-link.active {
            font-weight: bold;
            background: #f8f9fa;
            border-bottom-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="#">
                                <i class="bi bi-cart-plus me-2"></i> Nuevo Pedido
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">
                                <i class="bi bi-list-check me-2"></i> Pedidos en Proceso
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">
                                <i class="bi bi-box-seam me-2"></i> Historial
                            </a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="nav-link text-white" href="#">
                                <i class="bi bi-box-arrow-left me-2"></i> Cerrar Sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Registro de Pedidos</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <i class="bi bi-printer"></i> Imprimir
                            </button>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">Mesa:</span>
                            <select class="form-select form-select-sm" style="width: 80px;">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Categorías -->
                    <div class="col-md-3">
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-primary category-btn py-3" data-bs-toggle="pill" data-bs-target="#panes">
                                <i class="bi bi-bread-slice fs-4"></i><br>
                                Panes y Empanadas
                            </button>
                            <button class="btn btn-outline-success category-btn py-3" data-bs-toggle="pill" data-bs-target="#masas">
                                <i class="bi bi-egg-fried fs-4"></i><br>
                                Masas Típicas
                            </button>
                            <button class="btn btn-outline-warning category-btn py-3" data-bs-toggle="pill" data-bs-target="#especiales">
                                <i class="bi bi-star fs-4"></i><br>
                                Especiales
                            </button>
                            <button class="btn btn-outline-info category-btn py-3" data-bs-toggle="pill" data-bs-target="#frias">
                                <i class="bi bi-cup-straw fs-4"></i><br>
                                Bebidas Frías
                            </button>
                            <button class="btn btn-outline-danger category-btn py-3" data-bs-toggle="pill" data-bs-target="#calientes">
                                <i class="bi bi-cup-hot fs-4"></i><br>
                                Bebidas Calientes
                            </button>
                        </div>
                    </div>

                    <!-- Productos -->
                    <div class="col-md-6">
                        <div class="tab-content" id="pills-tabContent">
                            <!-- Panes y Empanadas -->
                            <div class="tab-pane fade show active" id="panes">
                                <h4 class="mb-3">Panes y Empanadas</h4>
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title">Pan con Queso</h5>
                                                <p class="card-text">$1.50</p>
                                                <button class="btn btn-sm btn-primary float-end agregar-producto" 
                                                        data-producto="Pan con Queso" 
                                                        data-precio="1.50">
                                                    <i class="bi bi-plus"></i> Agregar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title">Empanada de Carne</h5>
                                                <p class="card-text">$2.00</p>
                                                <button class="btn btn-sm btn-primary float-end agregar-producto" 
                                                        data-producto="Empanada de Carne" 
                                                        data-precio="2.00">
                                                    <i class="bi bi-plus"></i> Agregar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title">Empanada de Pollo</h5>
                                                <p class="card-text">$2.00</p>
                                                <button class="btn btn-sm btn-primary float-end agregar-producto" 
                                                        data-producto="Empanada de Pollo" 
                                                        data-precio="2.00">
                                                    <i class="bi bi-plus"></i> Agregar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title">Pan con Jamón</h5>
                                                <p class="card-text">$1.75</p>
                                                <button class="btn btn-sm btn-primary float-end agregar-producto" 
                                                        data-producto="Pan con Jamón" 
                                                        data-precio="1.75">
                                                    <i class="bi bi-plus"></i> Agregar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Masas Típicas -->
                            <div class="tab-pane fade" id="masas">
                                <h4 class="mb-3">Masas Típicas</h4>
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title">Arepa con Queso</h5>
                                                <p class="card-text">$2.50</p>
                                                <button class="btn btn-sm btn-primary float-end agregar-producto" 
                                                        data-producto="Arepa con Queso" 
                                                        data-precio="2.50">
                                                    <i class="bi bi-plus"></i> Agregar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title">Cachapa</h5>
                                                <p class="card-text">$3.00</p>
                                                <button class="btn btn-sm btn-primary float-end agregar-producto" 
                                                        data-producto="Cachapa" 
                                                        data-precio="3.00">
                                                    <i class="bi bi-plus"></i> Agregar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Especiales -->
                            <div class="tab-pane fade" id="especiales">
                                <h4 class="mb-3">Especiales</h4>
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title">Desayuno Completo</h5>
                                                <p class="card-text">$5.50</p>
                                                <button class="btn btn-sm btn-primary float-end agregar-producto" 
                                                        data-producto="Desayuno Completo" 
                                                        data-precio="5.50">
                                                    <i class="bi bi-plus"></i> Agregar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title">Combo Merienda</h5>
                                                <p class="card-text">$4.00</p>
                                                <button class="btn btn-sm btn-primary float-end agregar-producto" 
                                                        data-producto="Combo Merienda" 
                                                        data-precio="4.00">
                                                    <i class="bi bi-plus"></i> Agregar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Bebidas Frías -->
                            <div class="tab-pane fade" id="frias">
                                <h4 class="mb-3">Bebidas Frías</h4>
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title">Jugo Natural</h5>
                                                <p class="card-text">$2.00</p>
                                                <button class="btn btn-sm btn-primary float-end agregar-producto" 
                                                        data-producto="Jugo Natural" 
                                                        data-precio="2.00">
                                                    <i class="bi bi-plus"></i> Agregar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title">Refresco</h5>
                                                <p class="card-text">$1.50</p>
                                                <button class="btn btn-sm btn-primary float-end agregar-producto" 
                                                        data-producto="Refresco" 
                                                        data-precio="1.50">
                                                    <i class="bi bi-plus"></i> Agregar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Bebidas Calientes -->
                            <div class="tab-pane fade" id="calientes">
                                <h4 class="mb-3">Bebidas Calientes</h4>
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title">Café Negro</h5>
                                                <p class="card-text">$1.00</p>
                                                <button class="btn btn-sm btn-primary float-end agregar-producto" 
                                                        data-producto="Café Negro" 
                                                        data-precio="1.00">
                                                    <i class="bi bi-plus"></i> Agregar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title">Café con Leche</h5>
                                                <p class="card-text">$1.50</p>
                                                <button class="btn btn-sm btn-primary float-end agregar-producto" 
                                                        data-producto="Café con Leche" 
                                                        data-precio="1.50">
                                                    <i class="bi bi-plus"></i> Agregar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title">Té</h5>
                                                <p class="card-text">$1.25</p>
                                                <button class="btn btn-sm btn-primary float-end agregar-producto" 
                                                        data-producto="Té" 
                                                        data-precio="1.25">
                                                    <i class="bi bi-plus"></i> Agregar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pedido Actual -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="card-title mb-0">Pedido Actual</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="clienteNombre" class="form-label">Nombre del Cliente</label>
                                    <input type="text" class="form-control" id="clienteNombre" placeholder="Opcional">
                                </div>
                                
                                <h6>Items:</h6>
                                <div id="listaPedido">
                                    <!-- Aquí se agregarán los productos -->
                                    <div class="alert alert-info">No hay items agregados</div>
                                </div>
                                
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h5>Total:</h5>
                                    <h5 id="totalPedido">$0.00</h5>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-success" id="finalizarPedido">
                                        <i class="bi bi-check-circle"></i> Finalizar Pedido
                                    </button>
                                    <button class="btn btn-outline-danger" id="cancelarPedido">
                                        <i class="bi bi-x-circle"></i> Cancelar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sección de Pedidos en Proceso -->
                <div class="mt-5">
                    <h4>Pedidos en Proceso</h4>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <!-- Ejemplo de pedido -->
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <span class="badge bg-warning text-dark badge-status">En Proceso</span>
                                    <small class="text-muted">Mesa 2</small>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">Cliente: Juan Pérez</h6>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item small d-flex justify-content-between">
                                            <span>2x Café con Leche</span>
                                            <span>$3.00</span>
                                        </li>
                                        <li class="list-group-item small d-flex justify-content-between">
                                            <span>1x Pan con Queso</span>
                                            <span>$1.50</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer bg-transparent">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <strong>Total: $4.50</strong>
                                        <button class="btn btn-sm btn-success">
                                            <i class="bi bi-check"></i> Entregado
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Otro pedido de ejemplo -->
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <span class="badge bg-warning text-dark badge-status">En Proceso</span>
                                    <small class="text-muted">Mesa 4</small>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">Cliente: (Sin nombre)</h6>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item small d-flex justify-content-between">
                                            <span>1x Desayuno Completo</span>
                                            <span>$5.50</span>
                                        </li>
                                        <li class="list-group-item small d-flex justify-content-between">
                                            <span>1x Jugo Natural</span>
                                            <span>$2.00</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer bg-transparent">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <strong>Total: $7.50</strong>
                                        <button class="btn btn-sm btn-success">
                                            <i class="bi bi-check"></i> Entregado
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Modal Confirmar Pedido -->
    <div class="modal fade" id="confirmarPedidoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Confirmar Pedido</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>¿Confirmar el pedido para <strong id="clienteModal">(cliente)</strong> en <strong id="mesaModal">Mesa X</strong>?</p>
                    <p>Total: <strong id="totalModal">$0.00</strong></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success" id="confirmarPedidoBtn">Confirmar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const pedido = {
                items: [],
                mesa: 1,
                cliente: '',
                total: 0
            };

            // Seleccionar mesa
            const mesaSelect = document.querySelector('select');
            mesaSelect.addEventListener('change', function() {
                pedido.mesa = this.value;
            });

            // Nombre del cliente
            const clienteInput = document.getElementById('clienteNombre');
            clienteInput.addEventListener('input', function() {
                pedido.cliente = this.value;
            });

            // Agregar productos al pedido
            document.querySelectorAll('.agregar-producto').forEach(btn => {
                btn.addEventListener('click', function() {
                    const producto = this.getAttribute('data-producto');
                    const precio = parseFloat(this.getAttribute('data-precio'));
                    
                    // Verificar si el producto ya está en el pedido
                    const itemExistente = pedido.items.find(item => item.producto === producto);
                    
                    if (itemExistente) {
                        itemExistente.cantidad++;
                        itemExistente.subtotal = itemExistente.cantidad * precio;
                    } else {
                        pedido.items.push({
                            producto: producto,
                            precio: precio,
                            cantidad: 1,
                            subtotal: precio
                        });
                    }
                    
                    actualizarPedido();
                });
            });

            // Actualizar la visualización del pedido
            function actualizarPedido() {
                const listaPedido = document.getElementById('listaPedido');
                const totalPedido = document.getElementById('totalPedido');
                
                if (pedido.items.length === 0) {
                    listaPedido.innerHTML = '<div class="alert alert-info">No hay items agregados</div>';
                    totalPedido.textContent = '$0.00';
                    pedido.total = 0;
                    return;
                }
                
                listaPedido.innerHTML = '';
                let total = 0;
                
                pedido.items.forEach((item, index) => {
                    total += item.subtotal;
                    
                    const itemDiv = document.createElement('div');
                    itemDiv.className = 'mb-2 p-2 order-item';
                    itemDiv.innerHTML = `
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <strong>${item.cantidad}x</strong> ${item.producto}
                                <br>
                                <small class="text-muted">$${item.precio.toFixed(2)} c/u</small>
                            </div>
                            <div>
                                <span class="me-2">$${item.subtotal.toFixed(2)}</span>
                                <button class="btn btn-sm btn-outline-danger eliminar-item" data-index="${index}">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </div>
                    `;
                    
                    listaPedido.appendChild(itemDiv);
                });
                
                pedido.total = total;
                totalPedido.textContent = `$${total.toFixed(2)}`;
                
                // Agregar eventos a los botones de eliminar
                document.querySelectorAll('.eliminar-item').forEach(btn => {
                    btn.addEventListener('click', function() {
                        const index = parseInt(this.getAttribute('data-index'));
                        pedido.items.splice(index, 1);
                        actualizarPedido();
                    });
                });
            }

            // Finalizar pedido
            document.getElementById('finalizarPedido').addEventListener('click', function() {
                if (pedido.items.length === 0) {
                    alert('No hay items en el pedido');
                    return;
                }
                
                // Actualizar datos en el modal de confirmación
                document.getElementById('clienteModal').textContent = 
                    pedido.cliente ? pedido.cliente : '(cliente)';
                document.getElementById('mesaModal').textContent = `Mesa ${pedido.mesa}`;
                document.getElementById('totalModal').textContent = `$${pedido.total.toFixed(2)}`;
                
                // Mostrar modal
                const modal = new bootstrap.Modal(document.getElementById('confirmarPedidoModal'));
                modal.show();
            });

            // Confirmar pedido (simulación)
            document.getElementById('confirmarPedidoBtn').addEventListener('click', function() {
                alert(`Pedido confirmado para Mesa ${pedido.mesa}\nTotal: $${pedido.total.toFixed(2)}`);
                
                // Aquí normalmente enviarías los datos al servidor
                
                // Resetear pedido
                pedido.items = [];
                pedido.cliente = '';
                clienteInput.value = '';
                actualizarPedido();
                
                // Cerrar modal
                const modal = bootstrap.Modal.getInstance(document.getElementById('confirmarPedidoModal'));
                modal.hide();
            });

            // Cancelar pedido
            document.getElementById('cancelarPedido').addEventListener('click', function() {
                if (confirm('¿Cancelar el pedido actual?')) {
                    pedido.items = [];
                    pedido.cliente = '';
                    clienteInput.value = '';
                    actualizarPedido();
                }
            });
        });
    </script>
</body>
</html>