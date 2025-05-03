<!-- estado_pedido.blade.php -->
@extends('layout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Estado de tu Pedido</h4>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h5>Pedido #DVN-2023-0015</h5>
                        <p class="text-muted">Realizado el 15/10/2023 a las 10:30 AM</p>
                    </div>
                    
                    <div class="progress mb-4">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" 
                             role="progressbar" style="width: 50%;" 
                             aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            En Proceso
                        </div>
                    </div>
                    
                    <div class="timeline">
                        <div class="timeline-item completed">
                            <div class="timeline-point"></div>
                            <div class="timeline-content">
                                <h6>Pedido Recibido</h6>
                                <small class="text-muted">10:30 AM</small>
                            </div>
                        </div>
                        <div class="timeline-item active">
                            <div class="timeline-point"></div>
                            <div class="timeline-content">
                                <h6>En Preparación</h6>
                                <small class="text-muted">10:45 AM</small>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-point"></div>
                            <div class="timeline-content">
                                <h6>Listo para Entrega</h6>
                                <small class="text-muted">--</small>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-point"></div>
                            <div class="timeline-content">
                                <h6>Entregado</h6>
                                <small class="text-muted">--</small>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="my-4">
                    
                    <h5 class="mb-3">Detalles del Pedido</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Pan con Queso</td>
                                    <td>2</td>
                                    <td>$3.00</td>
                                </tr>
                                <tr>
                                    <td>Café con Leche</td>
                                    <td>1</td>
                                    <td>$1.50</td>
                                </tr>
                                <tr>
                                    <td>Jugo Natural</td>
                                    <td>1</td>
                                    <td>$2.00</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="2">Total</th>
                                    <th>$6.50</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-primary">
                            <i class="bi bi-printer"></i> Imprimir Comprobante
                        </button>
                        <button class="btn btn-outline-danger">
                            <i class="bi bi-x-circle"></i> Cancelar Pedido
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .timeline {
        position: relative;
        padding-left: 30px;
    }
    .timeline-item {
        position: relative;
        padding-bottom: 20px;
    }
    .timeline-point {
        position: absolute;
        left: -30px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #ddd;
        top: 0;
    }
    .timeline-item.completed .timeline-point {
        background: #28a745;
    }
    .timeline-item.active .timeline-point {
        background: #007bff;
        animation: pulse 1.5s infinite;
    }
    .timeline-content {
        padding-left: 10px;
    }
    @keyframes pulse {
        0% { box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.7); }
        70% { box-shadow: 0 0 0 10px rgba(0, 123, 255, 0); }
        100% { box-shadow: 0 0 0 0 rgba(0, 123, 255, 0); }
    }
</style>
@endsection