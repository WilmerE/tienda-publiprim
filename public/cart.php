<?php
$pageTitle = 'Carrito de Compras';
$currentPage = 'cart';
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
                <li class="breadcrumb-item active">Carrito</li>
            </ol>
        </nav>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="fw-bold mb-4"><i class="bi bi-cart3 me-2"></i>Tu Carrito</h2>

        <div class="row g-4">
            <!-- Cart Items -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 50%;">Producto</th>
                                        <th class="text-center">Cantidad</th>
                                        <th class="text-end">Precio</th>
                                        <th class="text-end">Subtotal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="cart-items-body">
                                    <!-- Cart Item 1 -->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="cart-item-img me-3 rounded d-flex align-items-center justify-content-center">
                                                    <i class="bi bi-image text-secondary"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 fw-bold">Banner Roll Up</h6>
                                                    <small class="text-muted">Material: Lona Vinílica 13oz</small><br>
                                                    <small class="text-muted">Medidas: 0.80 × 2.00 m</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="input-group input-group-sm justify-content-center" style="max-width: 120px; margin: 0 auto;">
                                                <button class="btn btn-outline-secondary btn-qty-minus" type="button">−</button>
                                                <input type="number" class="form-control text-center" value="1" min="1">
                                                <button class="btn btn-outline-secondary btn-qty-plus" type="button">+</button>
                                            </div>
                                        </td>
                                        <td class="text-end">Q 250.00</td>
                                        <td class="text-end fw-bold">Q 250.00</td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-danger" title="Eliminar">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Cart Item 2 -->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="cart-item-img me-3 rounded d-flex align-items-center justify-content-center">
                                                    <i class="bi bi-image text-secondary"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 fw-bold">Vinil Microperforado</h6>
                                                    <small class="text-muted">Material: Vinil Adhesivo</small><br>
                                                    <small class="text-muted">Medidas: 1.50 × 1.00 m</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="input-group input-group-sm justify-content-center" style="max-width: 120px; margin: 0 auto;">
                                                <button class="btn btn-outline-secondary btn-qty-minus" type="button">−</button>
                                                <input type="number" class="form-control text-center" value="2" min="1">
                                                <button class="btn btn-outline-secondary btn-qty-plus" type="button">+</button>
                                            </div>
                                        </td>
                                        <td class="text-end">Q 85.00</td>
                                        <td class="text-end fw-bold">Q 170.00</td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-danger" title="Eliminar">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <a href="products.php" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left me-1"></i>Seguir comprando
                    </a>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Resumen del Pedido</h5>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Subtotal (3 items)</span>
                            <span>Q 420.00</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Envío</span>
                            <span class="text-success">Por calcular</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-4">
                            <span class="fw-bold fs-5">Total</span>
                            <span class="fw-bold fs-5 text-primary">Q 420.00</span>
                        </div>
                        <a href="checkout.php" class="btn btn-primary btn-lg w-100">
                            <i class="bi bi-lock me-2"></i>Proceder al Pago
                        </a>
                        <div class="text-center mt-3">
                            <small class="text-muted">
                                <i class="bi bi-shield-check me-1"></i>Pago seguro garantizado
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Empty Cart State (hidden by default) -->
        <div class="text-center py-5 d-none" id="empty-cart">
            <i class="bi bi-cart-x text-muted" style="font-size: 4rem;"></i>
            <h4 class="mt-3">Tu carrito está vacío</h4>
            <p class="text-muted">Agrega productos para comenzar tu pedido.</p>
            <a href="products.php" class="btn btn-primary">
                <i class="bi bi-grid me-1"></i>Ver Productos
            </a>
        </div>
    </div>
</section>

<?php require_once APP_PATH . '/views/partials/footer.php'; ?>
