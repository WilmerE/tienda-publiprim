<?php
$pageTitle = 'Checkout';
$currentPage = 'checkout';
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
                <li class="breadcrumb-item"><a href="<?= APP_URL ?>/cart.php">Carrito</a></li>
                <li class="breadcrumb-item active">Checkout</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Checkout Steps -->
<section class="py-4">
    <div class="container">
        <div class="d-flex justify-content-center mb-4">
            <div class="checkout-steps d-flex align-items-center gap-3">
                <div class="step active">
                    <span class="step-number">1</span>
                    <span class="step-label">Dirección</span>
                </div>
                <div class="step-line"></div>
                <div class="step">
                    <span class="step-number">2</span>
                    <span class="step-label">Archivos</span>
                </div>
                <div class="step-line"></div>
                <div class="step">
                    <span class="step-number">3</span>
                    <span class="step-label">Pago</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-5">
    <div class="container">
        <div class="row g-4">
            <!-- Checkout Form -->
            <div class="col-lg-7">
                <!-- Step 1: Address -->
                <div class="card border-0 shadow-sm mb-4" id="step-address">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3"><i class="bi bi-geo-alt me-2"></i>Dirección de Entrega</h5>
                        <form id="form-address">
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <label class="form-label">Dirección completa</label>
                                <textarea class="form-control" rows="2" placeholder="Calle, número, zona, colonia..." required></textarea>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Ciudad</label>
                                    <input type="text" class="form-control" placeholder="Ciudad de Guatemala" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Referencia</label>
                                    <input type="text" class="form-control" placeholder="Cerca de...">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Step 2: Design Files -->
                <div class="card border-0 shadow-sm mb-4" id="step-files">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3"><i class="bi bi-cloud-upload me-2"></i>Archivos de Diseño</h5>
                        <p class="text-muted small">Sube tus archivos de diseño en formato PDF, AI, PSD o PNG en alta resolución (300 dpi mínimo).</p>
                        <div class="upload-zone rounded border-2 border-dashed p-5 text-center mb-3">
                            <i class="bi bi-cloud-arrow-up fs-1 text-muted"></i>
                            <p class="mt-2 mb-1">Arrastra tus archivos aquí o</p>
                            <label class="btn btn-outline-primary btn-sm">
                                Seleccionar archivos
                                <input type="file" class="d-none" multiple accept=".pdf,.ai,.psd,.png,.jpg">
                            </label>
                            <p class="text-muted small mt-2">Máx. 50MB por archivo</p>
                        </div>
                        <div id="uploaded-files">
                            <!-- Uploaded file preview mockup -->
                            <div class="d-flex align-items-center justify-content-between bg-light rounded p-2 mb-2">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-file-earmark-pdf text-danger me-2 fs-5"></i>
                                    <div>
                                        <small class="fw-bold">diseno-banner.pdf</small><br>
                                        <small class="text-muted">2.4 MB</small>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-x"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3: Payment -->
                <div class="card border-0 shadow-sm" id="step-payment">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3"><i class="bi bi-credit-card me-2"></i>Método de Pago</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="form-check payment-option p-3 border rounded text-center">
                                    <input class="form-check-input d-none" type="radio" name="payment" id="pay-card" value="card" checked>
                                    <label class="form-check-label d-block cursor-pointer" for="pay-card">
                                        <i class="bi bi-credit-card-2-front fs-3 text-primary d-block mb-1"></i>
                                        <small class="fw-bold">Tarjeta</small>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check payment-option p-3 border rounded text-center">
                                    <input class="form-check-input d-none" type="radio" name="payment" id="pay-paypal" value="paypal">
                                    <label class="form-check-label d-block cursor-pointer" for="pay-paypal">
                                        <i class="bi bi-paypal fs-3 text-primary d-block mb-1"></i>
                                        <small class="fw-bold">PayPal</small>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check payment-option p-3 border rounded text-center">
                                    <input class="form-check-input d-none" type="radio" name="payment" id="pay-transfer" value="transfer">
                                    <label class="form-check-label d-block cursor-pointer" for="pay-transfer">
                                        <i class="bi bi-bank fs-3 text-primary d-block mb-1"></i>
                                        <small class="fw-bold">Transferencia</small>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Card Form (shown when card is selected) -->
                        <div class="mt-4" id="card-form">
                            <div class="mb-3">
                                <label class="form-label">Número de tarjeta</label>
                                <input type="text" class="form-control" placeholder="0000 0000 0000 0000" maxlength="19">
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Vencimiento</label>
                                    <input type="text" class="form-control" placeholder="MM/AA" maxlength="5">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">CVV</label>
                                    <input type="text" class="form-control" placeholder="123" maxlength="4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm sticky-top" style="top: 80px;">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Resumen del Pedido</h5>

                        <div class="checkout-item d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h6 class="mb-0 fw-bold">Banner Roll Up</h6>
                                <small class="text-muted">Lona Vinílica · 0.80×2.00m · ×1</small>
                            </div>
                            <span class="fw-bold">Q 250.00</span>
                        </div>
                        <div class="checkout-item d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h6 class="mb-0 fw-bold">Vinil Microperforado</h6>
                                <small class="text-muted">Vinil Adhesivo · 1.50×1.00m · ×2</small>
                            </div>
                            <span class="fw-bold">Q 170.00</span>
                        </div>

                        <hr>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Subtotal</span>
                            <span>Q 420.00</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Envío</span>
                            <span>Q 35.00</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-4">
                            <span class="fw-bold fs-5">Total</span>
                            <span class="fw-bold fs-5 text-primary">Q 455.00</span>
                        </div>

                        <button class="btn btn-primary btn-lg w-100" id="btn-place-order">
                            <i class="bi bi-lock me-2"></i>Confirmar y Pagar
                        </button>

                        <div class="text-center mt-3">
                            <small class="text-muted">
                                <i class="bi bi-shield-check me-1"></i>Transacción segura y encriptada
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once APP_PATH . '/views/partials/footer.php'; ?>
