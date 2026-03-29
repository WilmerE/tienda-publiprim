<!-- Top Navbar -->
<header class="sticky-top shadow-sm" style="background-color: var(--pp-navbar, #21282c);">
    <!-- Row 1: Logo + Search + Cart -->
    <div class="container py-2">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-auto">
                <a href="<?= APP_URL ?>/" class="d-flex align-items-center text-decoration-none">
                    <img src="<?= asset('images/logo/isologo.png') ?>" alt="<?= e(setting('company_name', 'Publiprim')) ?>" width="50" height="50" class="me-2">
                    <span class="brand-name"><?= e(setting('company_name', 'Publiprim')) ?></span>
                </a>
            </div>
            <!-- Search Bar -->
            <div class="col d-none d-lg-block">
                <form class="d-flex search-bar mx-auto" style="max-width:500px;" action="<?= APP_URL ?>/products.php" method="get">
                    <input type="text" name="q" class="form-control border-end-0 rounded-start-pill" placeholder="Búsqueda">
                    <select name="category" class="form-select border-start-0 border-end-0" style="max-width:180px;">
                        <option value="">Todas las categorías</option>
                        <option value="lonas-banners">Lonas y Banners</option>
                        <option value="vinil-adhesivo">Vinil Adhesivo</option>
                        <option value="senalizacion">Señalización</option>
                    </select>
                    <button type="submit" class="btn btn-primary rounded-end-pill px-3">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>
            <!-- Cart + User -->
            <div class="col-auto d-flex align-items-center gap-2">
                <a href="<?= APP_URL ?>/cart.php" class="btn btn-outline-light rounded-pill px-3 position-relative cart-btn">
                    <i class="bi bi-cart3 me-1"></i> <span class="d-none d-md-inline"><?= CURRENCY ?>0.00</span>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-count" style="display:none;">0</span>
                </a>
                <a href="#" class="btn btn-outline-light rounded-pill px-3 d-none d-md-inline-flex" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <i class="bi bi-person me-1"></i> Ingresar
                </a>
                <!-- Mobile toggle -->
                <button class="btn btn-outline-light d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                    <i class="bi bi-list"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Row 2: Navigation -->
    <nav class="navbar navbar-expand-lg py-0" style="background-color: var(--pp-navbar, #21282c);">
        <div class="container">
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto gap-1">
                    <li class="nav-item">
                        <a class="nav-link main-nav-link <?= ($currentPage ?? '') === 'home' ? 'active' : '' ?>" href="<?= APP_URL ?>/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link main-nav-link <?= ($currentPage ?? '') === 'products' ? 'active' : '' ?>" href="<?= APP_URL ?>/products.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link main-nav-link <?= ($currentPage ?? '') === 'about' ? 'active' : '' ?>" href="<?= APP_URL ?>/about.php">Nosotros</a>
                    </li>
                </ul>
                <!-- Mobile search -->
                <form class="d-lg-none pb-3" action="<?= APP_URL ?>/products.php" method="get">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Buscar productos...">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
</header>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Iniciar Sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center py-4">
                <p class="text-muted mb-4">Ingresa con tu cuenta para continuar</p>
                <div class="d-grid gap-3 mx-auto" style="max-width: 300px;">
                    <a href="#" class="btn btn-danger btn-lg">
                        <i class="bi bi-google"></i> Continuar con Google
                    </a>
                    <a href="#" class="btn btn-primary btn-lg">
                        <i class="bi bi-facebook"></i> Continuar con Facebook
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
