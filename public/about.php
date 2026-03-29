<?php
$pageTitle = 'Sobre Nosotros';
$currentPage = 'about';
require_once __DIR__ . '/../config/bootstrap.php';
require_once APP_PATH . '/views/partials/header.php';
require_once APP_PATH . '/views/partials/navbar.php';
?>

<!-- Hero -->
<section class="bg-dark text-white py-5">
    <div class="container text-center">
        <h1 class="display-5 fw-bold">Sobre <?= e(setting('company_name', 'Publiprim')) ?></h1>
        <p class="lead opacity-75"><?= e(setting('company_slogan', 'Impresión a gran formato y diseño digital.')) ?></p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="about-img-placeholder rounded shadow d-flex align-items-center justify-content-center">
                    <i class="bi bi-building text-secondary" style="font-size: 5rem;"></i>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-3">¿Quiénes somos?</h2>
                <p class="text-muted">
                    <?= e(setting('company_name', 'Publiprim')) ?> es una imprenta dedicada a servicios de impresión a gran formato y diseño digital. 
                    Ofrecemos soluciones integrales para negocios, eventos y proyectos personales con la más alta 
                    calidad y los mejores tiempos de entrega.
                </p>
                <p class="text-muted">
                    Contamos con tecnología de impresión de última generación que nos permite ofrecer resoluciones 
                    de hasta 1440 dpi en una amplia variedad de materiales.
                </p>
                <div class="row g-3 mt-3">
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-primary fs-4"></i>
                            <span>Alta resolución</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-primary fs-4"></i>
                            <span>Entrega rápida</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-primary fs-4"></i>
                            <span>Variedad de materiales</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-primary fs-4"></i>
                            <span>Asesoría de diseño</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-3">
                <h2 class="display-5 fw-bold">500+</h2>
                <p class="mb-0 opacity-75">Clientes satisfechos</p>
            </div>
            <div class="col-md-3">
                <h2 class="display-5 fw-bold">2,000+</h2>
                <p class="mb-0 opacity-75">Proyectos completados</p>
            </div>
            <div class="col-md-3">
                <h2 class="display-5 fw-bold">10+</h2>
                <p class="mb-0 opacity-75">Años de experiencia</p>
            </div>
            <div class="col-md-3">
                <h2 class="display-5 fw-bold">24h</h2>
                <p class="mb-0 opacity-75">Entrega express</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-3">Contáctanos</h2>
                <p class="text-muted mb-4">¿Tienes un proyecto en mente? Escríbenos y te asesoramos.</p>
                <div class="d-flex align-items-start gap-3 mb-3">
                    <i class="bi bi-geo-alt-fill text-primary fs-4"></i>
                    <div>
                        <h6 class="fw-bold mb-0">Dirección</h6>
                        <a href="<?= e(setting('company_map_url', '#')) ?>" target="_blank" class="text-muted text-decoration-none"><?= e(setting('company_address', 'Guatemala')) ?></a>
                    </div>
                </div>
                <div class="d-flex align-items-start gap-3 mb-3">
                    <i class="bi bi-envelope-fill text-primary fs-4"></i>
                    <div>
                        <h6 class="fw-bold mb-0">Email</h6>
                        <a href="mailto:<?= e(setting('company_email', '')) ?>" class="text-muted text-decoration-none"><?= e(setting('company_email', '')) ?></a>
                    </div>
                </div>
                <div class="d-flex align-items-start gap-3 mb-3">
                    <i class="bi bi-phone-fill text-primary fs-4"></i>
                    <div>
                        <h6 class="fw-bold mb-0">Teléfono</h6>
                        <a href="tel:<?= e(setting('company_phone', '')) ?>" class="text-muted text-decoration-none"><?= e(setting('company_phone_display', '')) ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" placeholder="Tu nombre">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="tu@email.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mensaje</label>
                            <textarea class="form-control" rows="4" placeholder="Describe tu proyecto..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="bi bi-send me-1"></i>Enviar Mensaje
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once APP_PATH . '/views/partials/footer.php'; ?>
