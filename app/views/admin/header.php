<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($adminTitle ?? 'Admin') ?> | Publiprim Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="assets/css/admin.css" rel="stylesheet">
</head>
<body>
<div class="d-flex" id="admin-wrapper">

    <!-- Sidebar -->
    <nav class="admin-sidebar bg-dark text-white" id="sidebar">
        <div class="sidebar-header p-3 border-bottom border-secondary">
            <a href="index.php" class="text-white text-decoration-none d-flex align-items-center gap-2">
                <i class="bi bi-printer fs-4"></i>
                <span class="fw-bold fs-5">Publiprim</span>
            </a>
            <small class="text-secondary">Panel Administrativo</small>
        </div>
        <ul class="nav flex-column p-3 gap-1">
            <li class="nav-item">
                <a class="nav-link text-white <?= ($adminPage ?? '') === 'dashboard' ? 'active' : '' ?>" href="index.php">
                    <i class="bi bi-speedometer2 me-2"></i>Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= ($adminPage ?? '') === 'products' ? 'active' : '' ?>" href="products.php">
                    <i class="bi bi-box-seam me-2"></i>Productos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= ($adminPage ?? '') === 'categories' ? 'active' : '' ?>" href="categories.php">
                    <i class="bi bi-tags me-2"></i>Categorías
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= ($adminPage ?? '') === 'materials' ? 'active' : '' ?>" href="materials.php">
                    <i class="bi bi-layers me-2"></i>Materiales
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= ($adminPage ?? '') === 'finishes' ? 'active' : '' ?>" href="finishes.php">
                    <i class="bi bi-brush me-2"></i>Acabados
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= ($adminPage ?? '') === 'orders' ? 'active' : '' ?>" href="orders.php">
                    <i class="bi bi-receipt me-2"></i>Pedidos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= ($adminPage ?? '') === 'quotes' ? 'active' : '' ?>" href="quotes.php">
                    <i class="bi bi-file-earmark-text me-2"></i>Cotizaciones
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= ($adminPage ?? '') === 'users' ? 'active' : '' ?>" href="users.php">
                    <i class="bi bi-people me-2"></i>Usuarios
                </a>
            </li>
            <li class="nav-item mt-3 border-top border-secondary pt-3">
                <a class="nav-link text-white" href="../public/">
                    <i class="bi bi-shop me-2"></i>Ver Tienda
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="admin-content flex-grow-1">
        <!-- Top Bar -->
        <nav class="navbar navbar-light bg-white border-bottom px-4 py-2">
            <button class="btn btn-sm btn-outline-dark d-lg-none" id="btn-toggle-sidebar">
                <i class="bi bi-list"></i>
            </button>
            <span class="navbar-text fw-bold"><?= e($adminTitle ?? 'Dashboard') ?></span>
            <div class="d-flex align-items-center gap-3">
                <span class="text-muted small d-none d-md-inline"><?= date('d/m/Y') ?></span>
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle me-1"></i>Admin
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-1"></i>Configuración</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-box-arrow-right me-1"></i>Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="p-4">
