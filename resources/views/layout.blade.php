<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divino Pan - Cafetería</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1509440159596-0249088772ff');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            margin-bottom: 40px;
        }
        .category-card {
            transition: transform 0.3s;
            cursor: pointer;
        }
        .category-card:hover {
            transform: translateY(-5px);
        }
        .product-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s;
            margin-bottom: 20px;
        }
        .product-card:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        .status-badge {
            font-size: 0.9rem;
            padding: 0.35rem 0.75rem;
        }
    </style>
</head>
<body>
    <!-- layout.blade.php - Plantilla base -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-cup-hot"></i> Divino Pan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-house"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-menu-up"></i> Menú</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-question-circle"></i> Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-person"></i> Mi Cuenta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-cart3"></i> Carrito (0)</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido dinámico -->
    @yield('content')

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5><i class="bi bi-cup-hot"></i> Divino Pan</h5>
                    <p>La mejor cafetería con los productos más frescos y deliciosos.</p>
                </div>
                <div class="col-md-4">
                    <h5>Horario</h5>
                    <p>Lunes a Viernes: 7am - 8pm<br>
                    Sábados: 8am - 6pm<br>
                    Domingos: 9am - 4pm</p>
                </div>
                <div class="col-md-4">
                    <h5>Contacto</h5>
                    <p><i class="bi bi-geo-alt"></i> Av. Principal #123<br>
                    <i class="bi bi-telephone"></i> (555) 123-4567<br>
                    <i class="bi bi-envelope"></i> info@divinopan.com</p>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p class="mb-0">© 2023 Divino Pan. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>