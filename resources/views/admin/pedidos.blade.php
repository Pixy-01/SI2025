<!-- admin/pedidos.blade.php -->
@extends('layouts.admin_layout')


@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Toma de Pedidos</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">
                <i class="bi bi-printer"></i> Imprimir
            </button>
        </div>
        <div class="d-flex align-items-center">
            <span class="me-2">Mesa:</span>
            <select class="form-select form-select-sm" style="width: 80px;">
                @for($i = 1; $i <= 10; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
    </div>
</div>

<div class="row">
    <!-- Categorías -->
    <div class="col-md-3">
        <div class="d-grid gap-2">
            <button class="btn btn-outline-primary category-btn py-3 active" data-category="panes">
                <i class="bi bi-bread-slice fs-4"></i><br>
                Panes y Empanadas
            </button>
            <button class="btn btn-outline-success category-btn py-3" data-category="masas">
                <i class="bi bi-egg-fried fs-4"></i><br>
                Masas Típicas
            </button>
            <button class="btn btn-outline-warning category-btn py-3" data-category="especiales">
                <i class="bi bi-star fs-4"></i><br>
                Especiales
            </button>
            <button class="btn btn-outline-info category-btn py-3" data-category="frias">
                <i class="bi bi-cup-straw fs-4"></i><br>
                Bebidas Frías
            </button>
            <button class="btn btn-outline-danger category-btn py-3" data-category="calientes">
                <i class="bi bi-cup-hot fs-4"></i><br>
                Bebidas Calientes
            </button>
        </div>
    </div>

    <!-- Productos -->
    <div class="col-md-6">
        <div class="row row-cols-1 row-cols-md-2 g-4" id="productos-container">
            <!-- Producto 1 -->
            <div class="col" data-category="panes">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Pan con Queso</h5>
                        <p class="card-text text-muted">Delicioso pan recién horneado con queso derretido</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 text-success">$1.50</h5>
                            <button class="btn btn-sm btn-primary agregar-producto" 
                                    data-producto="Pan con Queso" 
                                    data-precio="1.50">
                                <i class="bi bi-plus"></i> Agregar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Producto 2 -->
            <div class="col" data-category="panes">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Empanada de Carne</h5>
                        <p class="card-text text-muted">Empanada casera rellena de carne mechada</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 text-success">$2.00</h5>
                            <button class="btn btn-sm btn-primary agregar-producto" 
                                    data-producto="Empanada de Carne" 
                                    data-precio="2.00">
                                <i class="bi bi-plus"></i> Agregar
                            </button>
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
        <!-- Pedido de ejemplo -->
        <div class="col">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="badge bg-warning text-dark">En Proceso</span>
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
    </div>
</div>

<!-- Modal Confirmar Pedido -->
<div class="modal fade" id="confirmarPedidoModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Confirmar Pedido</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
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

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Filtrado por categoría
        document.querySelectorAll('.category-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                const category = this.getAttribute('data-category');
                const products = document.querySelectorAll('#productos-container [data-category]');
                
                products.forEach(product => {
                    if (category === 'all' || product.getAttribute('data-category') === category) {
                        product.style.display = 'block';
                    } else {
                        product.style.display = 'none';
                    }
                });
            });
        });

        // Lógica del pedido
        const pedido = {
            items: [],
            mesa: 1,
            cliente: '',
            total: 0
        };

        // Seleccionar mesa
        document.querySelector('select').addEventListener('change', function() {
            pedido.mesa = this.value;
        });

        // Nombre del cliente
        document.getElementById('clienteNombre').addEventListener('input', function() {
            pedido.cliente = this.value;
        });

        // Agregar productos
        document.querySelectorAll('.agregar-producto').forEach(btn => {
            btn.addEventListener('click', function() {
                const producto = this.getAttribute('data-producto');
                const precio = parseFloat(this.getAttribute('data-precio'));
                
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
                itemDiv.className = 'mb-2 p-2 border-start border-primary';
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
            
            // Eventos para eliminar items
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
            
            // Actualizar modal de confirmación
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
            
            // Aquí iría el envío real al servidor
            
            // Resetear pedido
            pedido.items = [];
            pedido.cliente = '';
            document.getElementById('clienteNombre').value = '';
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
                document.getElementById('clienteNombre').value = '';
                actualizarPedido();
            }
        });
    });
</script>
@endsection
@endsection