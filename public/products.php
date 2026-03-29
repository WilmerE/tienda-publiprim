<?php
$pageTitle = 'Productos';
$currentPage = 'products';
require_once __DIR__ . '/../config/bootstrap.php';
require_once APP_PATH . '/views/partials/header.php';
require_once APP_PATH . '/views/partials/navbar.php';
?>

<!-- Breadcrumb -->
<section class="bg-light py-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= APP_URL ?>/">Inicio</a></li>
                <li class="breadcrumb-item active">Productos</li>
            </ol>
        </nav>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Sidebar Filters -->
            <div class="col-lg-3 mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3"><i class="bi bi-funnel me-2"></i>Filtros</h5>

                        <!-- Category Filter -->
                        <div class="mb-4">
                            <h6 class="fw-bold text-uppercase small text-muted">Categoría</h6>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="cat-all" checked>
                                <label class="form-check-label" for="cat-all">Todas</label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="cat-lonas" value="lonas-banners">
                                <label class="form-check-label" for="cat-lonas">Lonas y Banners</label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="cat-vinil" value="vinil-adhesivo">
                                <label class="form-check-label" for="cat-vinil">Vinil Adhesivo</label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="cat-senal" value="senalizacion">
                                <label class="form-check-label" for="cat-senal">Señalización</label>
                            </div>
                        </div>

                        <!-- Price Filter -->
                        <div class="mb-4">
                            <h6 class="fw-bold text-uppercase small text-muted">Precio</h6>
                            <div class="row g-2">
                                <div class="col-6">
                                    <input type="number" class="form-control form-control-sm" placeholder="Min" id="price-min">
                                </div>
                                <div class="col-6">
                                    <input type="number" class="form-control form-control-sm" placeholder="Max" id="price-max">
                                </div>
                            </div>
                        </div>

                        <!-- Material Filter -->
                        <div class="mb-4">
                            <h6 class="fw-bold text-uppercase small text-muted">Material</h6>
                            <select class="form-select form-select-sm" id="filter-material">
                                <option value="">Todos</option>
                                <option value="1">Lona Vinílica</option>
                                <option value="2">Vinil Adhesivo</option>
                                <option value="3">PVC Espumado</option>
                                <option value="4">Lona Mesh</option>
                            </select>
                        </div>

                        <!-- Production Time -->
                        <div class="mb-3">
                            <h6 class="fw-bold text-uppercase small text-muted">Tiempo de Producción</h6>
                            <select class="form-select form-select-sm" id="filter-time">
                                <option value="">Cualquiera</option>
                                <option value="24h">24 horas</option>
                                <option value="48h">48 horas</option>
                                <option value="72h">72 horas</option>
                            </select>
                        </div>

                        <button class="btn btn-primary w-100 mt-2" id="btn-apply-filters">
                            <i class="bi bi-search me-1"></i> Aplicar Filtros
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Grid -->
            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="fw-bold mb-0">Todos los Productos</h4>
                    <div class="d-flex align-items-center gap-2">
                        <label class="text-muted small text-nowrap">Ordenar por:</label>
                        <select class="form-select form-select-sm" style="width: auto;" id="sort-products">
                            <option value="newest">Más recientes</option>
                            <option value="price-asc">Precio: Menor a Mayor</option>
                            <option value="price-desc">Precio: Mayor a Menor</option>
                            <option value="name">Nombre A-Z</option>
                        </select>
                    </div>
                </div>

                <div class="row g-4" id="products-grid">
                    <!-- Product Card 1 -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card product-card border-0 shadow-sm h-100">
                            <div class="product-img-placeholder d-flex align-items-center justify-content-center">
                                <i class="bi bi-image text-secondary" style="font-size: 2.5rem;"></i>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="badge bg-secondary mb-2 align-self-start">Lonas</span>
                                <h6 class="card-title fw-bold">Banner Roll Up</h6>
                                <p class="text-muted small flex-grow-1">Incluye estructura metálica + impresión en alta resolución.</p>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <span class="fw-bold text-primary fs-5">Q 250.00</span>
                                    <a href="product-detail.php?slug=banner-roll-up" class="btn btn-sm btn-primary">
                                        <i class="bi bi-eye me-1"></i>Detalle
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 2 -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card product-card border-0 shadow-sm h-100">
                            <div class="product-img-placeholder d-flex align-items-center justify-content-center">
                                <i class="bi bi-image text-secondary" style="font-size: 2.5rem;"></i>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="badge bg-secondary mb-2 align-self-start">Vinil</span>
                                <h6 class="card-title fw-bold">Vinil Microperforado</h6>
                                <p class="text-muted small flex-grow-1">Ideal para ventanas y vehículos. Permite visibilidad.</p>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <span class="fw-bold text-primary fs-5">Q 85.00</span>
                                    <a href="product-detail.php?slug=vinil-microperforado" class="btn btn-sm btn-primary">
                                        <i class="bi bi-eye me-1"></i>Detalle
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 3 -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card product-card border-0 shadow-sm h-100">
                            <div class="product-img-placeholder d-flex align-items-center justify-content-center">
                                <i class="bi bi-image text-secondary" style="font-size: 2.5rem;"></i>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="badge bg-secondary mb-2 align-self-start">Señalización</span>
                                <h6 class="card-title fw-bold">Letrero PVC</h6>
                                <p class="text-muted small flex-grow-1">Impresión directa en PVC espumado 3mm y 5mm.</p>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <span class="fw-bold text-primary fs-5">Q 120.00</span>
                                    <a href="product-detail.php?slug=letrero-pvc" class="btn btn-sm btn-primary">
                                        <i class="bi bi-eye me-1"></i>Detalle
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 4 -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card product-card border-0 shadow-sm h-100">
                            <div class="product-img-placeholder d-flex align-items-center justify-content-center">
                                <i class="bi bi-image text-secondary" style="font-size: 2.5rem;"></i>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="badge bg-secondary mb-2 align-self-start">Lonas</span>
                                <h6 class="card-title fw-bold">Lona Front</h6>
                                <p class="text-muted small flex-grow-1">Lona traslúcida para iluminación trasera (backlight).</p>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <span class="fw-bold text-primary fs-5">Q 65.00</span>
                                    <a href="product-detail.php?slug=lona-front" class="btn btn-sm btn-primary">
                                        <i class="bi bi-eye me-1"></i>Detalle
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 5 -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card product-card border-0 shadow-sm h-100">
                            <div class="product-img-placeholder d-flex align-items-center justify-content-center">
                                <i class="bi bi-image text-secondary" style="font-size: 2.5rem;"></i>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="badge bg-secondary mb-2 align-self-start">Vinil</span>
                                <h6 class="card-title fw-bold">Vinil Reflectivo</h6>
                                <p class="text-muted small flex-grow-1">Alta visibilidad nocturna para señalización vial.</p>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <span class="fw-bold text-primary fs-5">Q 150.00</span>
                                    <a href="product-detail.php?slug=vinil-reflectivo" class="btn btn-sm btn-primary">
                                        <i class="bi bi-eye me-1"></i>Detalle
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 6 -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card product-card border-0 shadow-sm h-100">
                            <div class="product-img-placeholder d-flex align-items-center justify-content-center">
                                <i class="bi bi-image text-secondary" style="font-size: 2.5rem;"></i>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="badge bg-secondary mb-2 align-self-start">Señalización</span>
                                <h6 class="card-title fw-bold">Acrílico Grabado</h6>
                                <p class="text-muted small flex-grow-1">Placas de acrílico con grabado láser personalizado.</p>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <span class="fw-bold text-primary fs-5">Q 200.00</span>
                                    <a href="product-detail.php?slug=acrilico-grabado" class="btn btn-sm btn-primary">
                                        <i class="bi bi-eye me-1"></i>Detalle
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav class="mt-5">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<?php require_once APP_PATH . '/views/partials/footer.php'; ?>
