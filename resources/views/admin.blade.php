<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Cafetería</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .sidebar {
            min-height: 100vh;
            background: #212529;
        }
        .nav-link {
            color: rgba(255, 255, 255, 0.75);
        }
        .nav-link:hover, .nav-link.active {
            color: white;
            background: rgba(255, 255, 255, 0.1);
        }
        .main-content {
            background: #f8f9fa;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .badge-admin {
            background: #dc3545;
        }
        .badge-editor {
            background: #fd7e14;
        }
        .badge-user {
            background: #20c997;
        }
        .category-badge {
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
        }
        .low-stock {
            color: #dc3545;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar p-0">
                <div class="p-3 text-white">
                    <h4 class="mb-4">Cafetería Admin</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#usuarios" data-bs-toggle="tab">
                                <i class="bi bi-people me-2"></i>Usuarios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#roles" data-bs-toggle="tab">
                                <i class="bi bi-shield-lock me-2"></i>Roles
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#inventario" data-bs-toggle="tab">
                                <i class="bi bi-box-seam me-2"></i>Inventario
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-box-arrow-left me-2"></i>Cerrar sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 ms-sm-auto main-content p-0">
                <div class="tab-content">
                    <!-- Tabla de Usuarios -->
                    <div class="tab-pane fade" id="usuarios">
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h2>Administración de Usuarios</h2>
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
                                                    <th>Teléfono</th>
                                                    <th>Rol</th>
                                                    <th>Fecha Creación</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>admin</td>
                                                    <td>admin@cafeteria.com</td>
                                                    <td>+1 234 567 890</td>
                                                    <td><span class="badge bg-danger">Admin</span></td>
                                                    <td>2023-10-15</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary me-1" 
                                                                data-bs-toggle="modal" 
                                                                data-bs-target="#editarUsuarioModal"
                                                                data-user-id="1"
                                                                data-username="admin"
                                                                data-email="admin@cafeteria.com"
                                                                data-phone="+1 234 567 890"
                                                                data-role="1">
                                                            <i class="bi bi-pencil"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-danger" 
                                                                data-bs-toggle="modal" 
                                                                data-bs-target="#confirmarEliminarModal"
                                                                data-user-id="1"
                                                                data-username="admin">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tabla de Roles -->
                    <div class="tab-pane fade" id="roles">
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h2>Administración de Roles</h2>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoRolModal">
                                    <i class="bi bi-plus-circle"></i> Nuevo Rol
                                </button>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nombre</th>
                                                    <th>Usuarios</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Admin</td>
                                                    <td>1</td>
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
                        </div>
                    </div>

                    <!-- Inventario -->
                    <div class="tab-pane fade show active" id="inventario">
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h2>Gestión de Inventario</h2>
                                <div>
                                    <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#nuevoProductoModal">
                                        <i class="bi bi-plus-circle"></i> Nuevo Producto
                                    </button>
                                    <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#nuevaCategoriaModal">
                                        <i class="bi bi-collection"></i> Nueva Categoría
                                    </button>
                                </div>
                            </div>

                            <!-- Filtros -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">Categoría</label>
                                            <select class="form-select">
                                                <option selected>Todas</option>
                                                <option>Frutas</option>
                                                <option>Bebidas</option>
                                                <option>Snacks</option>
                                                <option>Lácteos</option>
                                                <option>Panadería</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Estado</label>
                                            <select class="form-select">
                                                <option selected>Todos</option>
                                                <option>En stock</option>
                                                <option>Stock bajo</option>
                                                <option>Agotado</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Buscar</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Nombre del producto">
                                                <button class="btn btn-outline-secondary" type="button">
                                                    <i class="bi bi-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Resumen de categorías -->
                            <div class="row mb-4">
                                <div class="col-md-3">
                                    <div class="card bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title">Frutas</h5>
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
                                            <h5 class="card-title">Snacks</h5>
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

                            <!-- Tabla de inventario -->
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
                                                    <th>Precio</th>
                                                    <th>Proveedor</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>FR-001</td>
                                                    <td>Manzanas</td>
                                                    <td><span class="badge bg-primary category-badge">Frutas</span></td>
                                                    <td class="low-stock">5 <small class="text-muted">kg</small></td>
                                                    <td>$2.99 <small class="text-muted">/kg</small></td>
                                                    <td>Frutas Frescas S.A.</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary me-1" 
                                                                data-bs-toggle="modal" 
                                                                data-bs-target="#editarProductoModal">
                                                            <i class="bi bi-pencil"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-danger">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>FR-002</td>
                                                    <td>Plátanos</td>
                                                    <td><span class="badge bg-primary category-badge">Frutas</span></td>
                                                    <td>15 <small class="text-muted">kg</small></td>
                                                    <td>$1.49 <small class="text-muted">/kg</small></td>
                                                    <td>Frutas Tropicales</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary me-1">
                                                            <i class="bi bi-pencil"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-danger">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>BE-001</td>
                                                    <td>Café Americano</td>
                                                    <td><span class="badge bg-success category-badge">Bebidas</span></td>
                                                    <td>32 <small class="text-muted">unid.</small></td>
                                                    <td>$3.50 <small class="text-muted">/unid.</small></td>
                                                    <td>Café Premium</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary me-1">
                                                            <i class="bi bi-pencil"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-danger">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>SN-001</td>
                                                    <td>Galletas de Avena</td>
                                                    <td><span class="badge bg-warning text-dark category-badge">Snacks</span></td>
                                                    <td class="low-stock">3 <small class="text-muted">paq.</small></td>
                                                    <td>$2.25 <small class="text-muted">/paq.</small></td>
                                                    <td>Snacks Saludables</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary me-1">
                                                            <i class="bi bi-pencil"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-danger">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>LA-001</td>
                                                    <td>Leche Entera</td>
                                                    <td><span class="badge bg-info category-badge">Lácteos</span></td>
                                                    <td>12 <small class="text-muted">lts</small></td>
                                                    <td>$1.80 <small class="text-muted">/lt</small></td>
                                                    <td>Lácteos Naturales</td>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Nuevo Usuario -->
    <div class="modal fade" id="nuevoUsuarioModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Crear Nuevo Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control" id="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Rol</label>
                            <select class="form-select" id="role">
                                <option value="1">Admin</option>
                                <option value="2">Editor</option>
                                <option value="3" selected>Usuario</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Editar Usuario -->
    <div class="modal fade" id="editarUsuarioModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="hidden" id="editUserId">
                        <div class="mb-3">
                            <label for="editUsername" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control" id="editUsername" required>
                        </div>
                        <div class="mb-3">
                            <label for="editEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="editEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="editPhone" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="editPhone">
                        </div>
                        <div class="mb-3">
                            <label for="editRole" class="form-label">Rol</label>
                            <select class="form-select" id="editRole">
                                <option value="1">Admin</option>
                                <option value="2">Editor</option>
                                <option value="3">Usuario</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Confirmar Eliminar -->
    <div class="modal fade" id="confirmarEliminarModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">Confirmar Eliminación</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>¿Estás seguro que deseas eliminar al usuario <strong id="usernameToDelete"></strong>?</p>
                    <p class="text-danger">Esta acción no se puede deshacer.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Eliminar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Nuevo Producto -->
    <div class="modal fade" id="nuevoProductoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Agregar Producto al Inventario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="productName" class="form-label">Nombre del Producto</label>
                                <input type="text" class="form-control" id="productName" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="productCode" class="form-label">Código</label>
                                <input type="text" class="form-control" id="productCode" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="productCategory" class="form-label">Categoría</label>
                                <select class="form-select" id="productCategory" required>
                                    <option value="">Seleccionar...</option>
                                    <option value="1">Frutas</option>
                                    <option value="2">Bebidas</option>
                                    <option value="3">Snacks</option>
                                    <option value="4">Lácteos</option>
                                    <option value="5">Panadería</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="productUnit" class="form-label">Unidad de Medida</label>
                                <select class="form-select" id="productUnit" required>
                                    <option value="">Seleccionar...</option>
                                    <option value="kg">Kilogramos (kg)</option>
                                    <option value="g">Gramos (g)</option>
                                    <option value="lt">Litros (lt)</option>
                                    <option value="ml">Mililitros (ml)</option>
                                    <option value="unid">Unidades</option>
                                    <option value="paq">Paquetes</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="productStock" class="form-label">Stock Inicial</label>
                                <input type="number" class="form-control" id="productStock" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="productMinStock" class="form-label">Stock Mínimo</label>
                                <input type="number" class="form-control" id="productMinStock" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="productPrice" class="form-label">Precio Unitario</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" step="0.01" class="form-control" id="productPrice" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="productSupplier" class="form-label">Proveedor</label>
                                <input type="text" class="form-control" id="productSupplier">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="productNotes" class="form-label">Notas</label>
                            <textarea class="form-control" id="productNotes" rows="2"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar Producto</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Editar Producto -->
    <div class="modal fade" id="editarProductoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nombre del Producto</label>
                                <input type="text" class="form-control" value="Manzanas" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Código</label>
                                <input type="text" class="form-control" value="FR-001" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Categoría</label>
                                <select class="form-select" required>
                                    <option value="1" selected>Frutas</option>
                                    <option value="2">Bebidas</option>
                                    <option value="3">Snacks</option>
                                    <option value="4">Lácteos</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Unidad de Medida</label>
                                <select class="form-select" required>
                                    <option value="kg" selected>Kilogramos (kg)</option>
                                    <option value="g">Gramos (g)</option>
                                    <option value="lt">Litros (lt)</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Stock Actual</label>
                                <input type="number" class="form-control" value="5" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Stock Mínimo</label>
                                <input type="number" class="form-control" value="10" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Precio Unitario</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" step="0.01" class="form-control" value="2.99" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Proveedor</label>
                                <input type="text" class="form-control" value="Frutas Frescas S.A.">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Notas</label>
                            <textarea class="form-control" rows="2">Pedir más el próximo lunes</textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Nueva Categoría -->
    <div class="modal fade" id="nuevaCategoriaModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nueva Categoría de Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Nombre de la Categoría</label>
                            <input type="text" class="form-control" id="categoryName" required>
                        </div>
                        <div class="mb-3">
                            <label for="categoryDescription" class="form-label">Descripción</label>
                            <textarea class="form-control" id="categoryDescription" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="categoryColor" class="form-label">Color identificador</label>
                            <select class="form-select" id="categoryColor">
                                <option value="primary">Azul</option>
                                <option value="secondary">Gris</option>
                                <option value="success">Verde</option>
                                <option value="danger">Rojo</option>
                                <option value="warning">Amarillo</option>
                                <option value="info">Celeste</option>
                                <option value="dark">Negro</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Crear Categoría</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Script para usuarios (igual que antes)
            const editUserModal = document.getElementById('editarUsuarioModal');
            if (editUserModal) {
                editUserModal.addEventListener('show.bs.modal', function(event) {
                    const button = event.relatedTarget;
                    const userId = button.getAttribute('data-user-id');
                    const username = button.getAttribute('data-username');
                    const email = button.getAttribute('data-email');
                    const phone = button.getAttribute('data-phone');
                    const role = button.getAttribute('data-role');
                    
                    document.getElementById('editUserId').value = userId;
                    document.getElementById('editUsername').value = username;
                    document.getElementById('editEmail').value = email;
                    document.getElementById('editPhone').value = phone;
                    document.getElementById('editRole').value = role;
                });
            }
            
            const deleteModal = document.getElementById('confirmarEliminarModal');
            if (deleteModal) {
                deleteModal.addEventListener('show.bs.modal', function(event) {
                    const button = event.relatedTarget;
                    const userId = button.getAttribute('data-user-id');
                    const username = button.getAttribute('data-username');
                    
                    document.getElementById('usernameToDelete').textContent = username;
                    document.getElementById('confirmDelete').setAttribute('data-user-id', userId);
                });
            }
            
            const confirmDeleteBtn = document.getElementById('confirmDelete');
            if (confirmDeleteBtn) {
                confirmDeleteBtn.addEventListener('click', function() {
                    const userId = this.getAttribute('data-user-id');
                    alert(`Usuario con ID ${userId} eliminado (simulación)`);
                    const modal = bootstrap.Modal.getInstance(deleteModal);
                    modal.hide();
                });
            }

            // Puedes añadir aquí la lógica para el inventario
        });
    </script>
</body>
</html>