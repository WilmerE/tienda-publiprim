<?php
$pageTitle = 'Inicio';
$currentPage = 'home';
require_once __DIR__ . '/../config/bootstrap.php';
require_once APP_PATH . '/views/partials/header.php';
require_once APP_PATH . '/views/partials/navbar.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left: Text -->
            <div class="col-lg-5 hero-text">
                <span class="hero-badge">
                    <i class="bi bi-star-fill me-1"></i> ESPECIALISTAS EN IMPRESIÓN
                </span>
                <h1 class="hero-title">
                    <span class="hero-title-light">Impresión a</span>
                    <span class="hero-title-bold">Gran Formato</span>
                    <span class="hero-title-gradient">Para Tu Negocio</span>
                </h1>
                <div class="hero-divider"></div>
                <p class="hero-description">
                    Más de <strong>50 productos</strong> en lonas, viniles, banners y señalización. 
                    Calidad profesional con los mejores tiempos de entrega.
                </p>
                <div class="d-flex gap-3 flex-wrap mb-4">
                    <a href="products.php" class="btn btn-hero-primary btn-lg px-4">
                        Ver Catálogo Completo <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                    <a href="about.php" class="btn btn-hero-outline btn-lg px-4">
                        Cotizar Proyecto
                    </a>
                </div>
            </div>
            <!-- Right: Product Cards Carousel -->
            <div class="col-lg-7 hero-carousel-col">
                <div class="swiper hero-swiper">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="hero-product-card">
                                <div class="hero-product-img">
                                    <span class="hero-product-category">LONAS Y BANNERS</span>
                                    <div class="hero-product-img-placeholder">
                                        <i class="bi bi-image"></i>
                                    </div>
                                </div>
                                <div class="hero-product-info">
                                    <h4>Banner Roll Up</h4>
                                    <p class="hero-product-price"><?= CURRENCY ?>250.00</p>
                                    <a href="product-detail.php?slug=banner-roll-up" class="btn btn-hero-card">
                                        Ver Detalles <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="hero-product-card">
                                <div class="hero-product-img">
                                    <span class="hero-product-category">VINIL ADHESIVO</span>
                                    <div class="hero-product-img-placeholder">
                                        <i class="bi bi-image"></i>
                                    </div>
                                </div>
                                <div class="hero-product-info">
                                    <h4>Vinil Microperforado</h4>
                                    <p class="hero-product-price"><?= CURRENCY ?>85.00</p>
                                    <a href="product-detail.php?slug=vinil-microperforado" class="btn btn-hero-card">
                                        Ver Detalles <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="hero-product-card">
                                <div class="hero-product-img">
                                    <span class="hero-product-category">SEÑALIZACIÓN</span>
                                    <div class="hero-product-img-placeholder">
                                        <i class="bi bi-image"></i>
                                    </div>
                                </div>
                                <div class="hero-product-info">
                                    <h4>Letrero PVC</h4>
                                    <p class="hero-product-price"><?= CURRENCY ?>120.00</p>
                                    <a href="product-detail.php?slug=letrero-pvc" class="btn btn-hero-card">
                                        Ver Detalles <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div class="hero-product-card">
                                <div class="hero-product-img">
                                    <span class="hero-product-category">LONAS</span>
                                    <div class="hero-product-img-placeholder">
                                        <i class="bi bi-image"></i>
                                    </div>
                                </div>
                                <div class="hero-product-info">
                                    <h4>Lona Front Traslúcida</h4>
                                    <p class="hero-product-price"><?= CURRENCY ?>65.00</p>
                                    <a href="product-detail.php?slug=lona-front" class="btn btn-hero-card">
                                        Ver Detalles <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 5 -->
                        <div class="swiper-slide">
                            <div class="hero-product-card">
                                <div class="hero-product-img">
                                    <span class="hero-product-category">VINIL</span>
                                    <div class="hero-product-img-placeholder">
                                        <i class="bi bi-image"></i>
                                    </div>
                                </div>
                                <div class="hero-product-info">
                                    <h4>Vinil Reflectivo</h4>
                                    <p class="hero-product-price"><?= CURRENCY ?>150.00</p>
                                    <a href="product-detail.php?slug=vinil-reflectivo" class="btn btn-hero-card">
                                        Ver Detalles <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination hero-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scroll indicator -->
    <div class="hero-scroll-indicator">
        <span>SCROLL</span>
        <i class="bi bi-mouse"></i>
    </div>
</section>

<!-- Trust Badges -->
<section class="trust-badges py-4 border-bottom">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-4">
                <div class="d-flex flex-column align-items-center">
                    <i class="bi bi-patch-check trust-icon text-success"></i>
                    <span class="trust-label">Calidad Garantizada</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-column align-items-center">
                    <i class="bi bi-truck trust-icon text-primary"></i>
                    <span class="trust-label">Envío Seguro</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-column align-items-center">
                    <i class="bi bi-chat-dots trust-icon text-warning"></i>
                    <span class="trust-label">Asesoría Personalizada</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Nuestras Categorías</h2>
            <p class="text-muted">Explora nuestra variedad de productos de impresión</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card category-card border-0 shadow-sm h-100 overflow-hidden">
                    <div class="card-img-top category-img-placeholder d-flex align-items-center justify-content-center">
                        <i class="bi bi-image text-secondary" style="font-size: 3rem;"></i>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Lonas y Banners</h5>
                        <p class="card-text text-muted">Impresión en lona vinílica para interiores y exteriores.</p>
                        <a href="products.php?category=lonas-banners" class="btn btn-outline-primary rounded-pill">Ver productos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card category-card border-0 shadow-sm h-100 overflow-hidden">
                    <div class="card-img-top category-img-placeholder d-flex align-items-center justify-content-center">
                        <i class="bi bi-image text-secondary" style="font-size: 3rem;"></i>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Vinil Adhesivo</h5>
                        <p class="card-text text-muted">Vinil de corte y impresión para rotulación y decoración.</p>
                        <a href="products.php?category=vinil-adhesivo" class="btn btn-outline-primary rounded-pill">Ver productos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card category-card border-0 shadow-sm h-100 overflow-hidden">
                    <div class="card-img-top category-img-placeholder d-flex align-items-center justify-content-center">
                        <i class="bi bi-image text-secondary" style="font-size: 3rem;"></i>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Señalización</h5>
                        <p class="card-text text-muted">Rótulos, señales de seguridad y letreros personalizados.</p>
                        <a href="products.php?category=senalizacion" class="btn btn-outline-primary rounded-pill">Ver productos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Productos Destacados</h2>
            <p class="text-muted">Los favoritos de nuestros clientes</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card product-card border-0 shadow-sm h-100">
                    <div class="product-img-placeholder d-flex align-items-center justify-content-center">
                        <i class="bi bi-image text-secondary" style="font-size: 2.5rem;"></i>
                    </div>
                    <div class="card-body">
                        <span class="badge bg-primary-subtle text-primary mb-2">Lonas</span>
                        <h6 class="card-title fw-bold">Banner Roll Up</h6>
                        <p class="text-muted small mb-2">Incluye estructura + impresión</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary fs-5"><?= CURRENCY ?> 250.00</span>
                            <a href="product-detail.php?slug=banner-roll-up" class="btn btn-sm btn-outline-primary rounded-pill">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card product-card border-0 shadow-sm h-100">
                    <div class="product-img-placeholder d-flex align-items-center justify-content-center">
                        <i class="bi bi-image text-secondary" style="font-size: 2.5rem;"></i>
                    </div>
                    <div class="card-body">
                        <span class="badge bg-primary-subtle text-primary mb-2">Vinil</span>
                        <h6 class="card-title fw-bold">Vinil Microperforado</h6>
                        <p class="text-muted small mb-2">Ideal para ventanas y vehículos</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary fs-5"><?= CURRENCY ?> 85.00</span>
                            <a href="product-detail.php?slug=vinil-microperforado" class="btn btn-sm btn-outline-primary rounded-pill">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card product-card border-0 shadow-sm h-100">
                    <div class="product-img-placeholder d-flex align-items-center justify-content-center">
                        <i class="bi bi-image text-secondary" style="font-size: 2.5rem;"></i>
                    </div>
                    <div class="card-body">
                        <span class="badge bg-primary-subtle text-primary mb-2">Señalización</span>
                        <h6 class="card-title fw-bold">Letrero PVC</h6>
                        <p class="text-muted small mb-2">Impresión directa en PVC espumado</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary fs-5"><?= CURRENCY ?> 120.00</span>
                            <a href="product-detail.php?slug=letrero-pvc" class="btn btn-sm btn-outline-primary rounded-pill">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card product-card border-0 shadow-sm h-100">
                    <div class="product-img-placeholder d-flex align-items-center justify-content-center">
                        <i class="bi bi-image text-secondary" style="font-size: 2.5rem;"></i>
                    </div>
                    <div class="card-body">
                        <span class="badge bg-primary-subtle text-primary mb-2">Lonas</span>
                        <h6 class="card-title fw-bold">Lona Front</h6>
                        <p class="text-muted small mb-2">Lona traslúcida para backlight</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary fs-5"><?= CURRENCY ?> 65.00</span>
                            <a href="product-detail.php?slug=lona-front" class="btn btn-sm btn-outline-primary rounded-pill">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA / Process Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">¿Cómo funciona?</h2>
            <p class="text-muted">Tu pedido listo en simples pasos</p>
        </div>
        <div class="row g-4 text-center">
            <div class="col-md-3">
                <div class="step-icon mx-auto mb-3">
                    <i class="bi bi-search fs-2 text-primary"></i>
                </div>
                <h6 class="fw-bold">1. Elige tu producto</h6>
                <p class="text-muted small">Explora nuestro catálogo y selecciona lo que necesitas.</p>
            </div>
            <div class="col-md-3">
                <div class="step-icon mx-auto mb-3">
                    <i class="bi bi-sliders fs-2 text-primary"></i>
                </div>
                <h6 class="fw-bold">2. Personaliza</h6>
                <p class="text-muted small">Elige material, tamaño y acabado.</p>
            </div>
            <div class="col-md-3">
                <div class="step-icon mx-auto mb-3">
                    <i class="bi bi-credit-card fs-2 text-primary"></i>
                </div>
                <h6 class="fw-bold">3. Realiza tu pedido</h6>
                <p class="text-muted small">Paga en línea de forma segura.</p>
            </div>
            <div class="col-md-3">
                <div class="step-icon mx-auto mb-3">
                    <i class="bi bi-truck fs-2 text-primary"></i>
                </div>
                <h6 class="fw-bold">4. Recibe</h6>
                <p class="text-muted small">Te lo entregamos o recógelo en tienda.</p>
            </div>
        </div>
    </div>
</section>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/<?= e(setting('company_phone', '50233848226')) ?>" target="_blank" class="whatsapp-float" title="Escríbenos por WhatsApp">
    <i class="bi bi-whatsapp"></i>
</a>

<?php require_once APP_PATH . '/views/partials/footer.php'; ?>
