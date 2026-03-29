<?php
$pageTitle = 'Detalle del Producto';
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
                <li class="breadcrumb-item"><a href="<?= APP_URL ?>/products.php">Productos</a></li>
                <li class="breadcrumb-item active">Banner Roll Up</li>
            </ol>
        </nav>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Product Image -->
            <div class="col-lg-6">
                <div class="product-detail-img-placeholder d-flex align-items-center justify-content-center rounded shadow-sm">
                    <i class="bi bi-image text-secondary" style="font-size: 5rem;"></i>
                </div>
            </div>

            <!-- Product Info -->
            <div class="col-lg-6">
                <span class="badge bg-secondary mb-2">Lonas y Banners</span>
                <h2 class="fw-bold">Banner Roll Up</h2>
                <p class="text-muted">Incluye estructura metálica retráctil + impresión en alta resolución 1440 dpi. Ideal para ferias, exposiciones y puntos de venta.</p>

                <div class="d-flex align-items-center gap-3 mb-4">
                    <span class="fs-3 fw-bold text-primary">Q 250.00</span>
                    <span class="badge bg-success"><i class="bi bi-clock me-1"></i>Producción: 48h</span>
                </div>

                <hr>

                <!-- Material Selection -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Material</label>
                    <select class="form-select" id="select-material">
                        <option value="">Selecciona un material</option>
                        <option value="1" data-price="45.00">Lona Vinílica 13oz — Q 45.00/m²</option>
                        <option value="2" data-price="60.00">Lona Premium 18oz — Q 60.00/m²</option>
                    </select>
                </div>

                <!-- Custom Dimensions -->
                <div class="row g-3 mb-3">
                    <div class="col-6">
                        <label class="form-label fw-bold">Ancho (m)</label>
                        <input type="number" class="form-control" id="input-width" placeholder="Ej: 0.80" step="0.01" min="0.10">
                    </div>
                    <div class="col-6">
                        <label class="form-label fw-bold">Alto (m)</label>
                        <input type="number" class="form-control" id="input-height" placeholder="Ej: 2.00" step="0.01" min="0.10">
                    </div>
                </div>

                <!-- Finish Selection -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Acabado</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="finish-ojales" value="1">
                        <label class="form-check-label" for="finish-ojales">Ojales (+Q 5.00)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="finish-bastilla" value="2">
                        <label class="form-check-label" for="finish-bastilla">Bastilla reforzada (+Q 10.00)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="finish-laminado" value="3">
                        <label class="form-check-label" for="finish-laminado">Laminado UV (+Q 25.00)</label>
                    </div>
                </div>

                <!-- Quantity -->
                <div class="mb-4">
                    <label class="form-label fw-bold">Cantidad</label>
                    <div class="input-group" style="max-width: 160px;">
                        <button class="btn btn-outline-secondary" type="button" id="btn-qty-minus">−</button>
                        <input type="number" class="form-control text-center" id="input-quantity" value="1" min="1">
                        <button class="btn btn-outline-secondary" type="button" id="btn-qty-plus">+</button>
                    </div>
                </div>

                <!-- Price Summary -->
                <div class="bg-light rounded p-3 mb-4">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="text-muted">Material (m²):</span>
                        <span id="price-material">Q 0.00</span>
                    </div>
                    <div class="d-flex justify-content-between mb-1">
                        <span class="text-muted">Acabados:</span>
                        <span id="price-finishes">Q 0.00</span>
                    </div>
                    <div class="d-flex justify-content-between mb-1">
                        <span class="text-muted">Cantidad:</span>
                        <span id="summary-qty">1</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between fw-bold fs-5">
                        <span>Total estimado:</span>
                        <span class="text-primary" id="price-total">Q 250.00</span>
                    </div>
                </div>

                <button class="btn btn-primary btn-lg w-100" id="btn-add-cart">
                    <i class="bi bi-cart-plus me-2"></i>Agregar al Carrito
                </button>
            </div>
        </div>
    </div>
</section>

<?php require_once APP_PATH . '/views/partials/footer.php'; ?>
