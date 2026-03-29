<!-- Footer -->
<footer class="bg-dark text-light pt-5 pb-3 mt-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <h5 class="fw-bold d-flex align-items-center"><img src="<?= asset('images/logo/isologo.png') ?>" alt="<?= e(setting('company_name', 'Publiprim')) ?>" width="30" height="30" class="me-2"><span style="font-family:'Kodakku',sans-serif; font-size: 2rem; font-weight:200; letter-spacing:2px;"><?= e(setting('company_name', 'Publiprim')) ?></span></h5>
                <p class="text-secondary"><?= e(setting('company_slogan', 'Impresión a gran formato y diseño digital.')) ?></p>
                <div class="d-flex gap-3">
                    <a href="<?= e(setting('social_facebook', '#')) ?>" target="_blank" class="text-secondary fs-5"><i class="bi bi-facebook"></i></a>
                    <a href="<?= e(setting('social_instagram', '#')) ?>" target="_blank" class="text-secondary fs-5"><i class="bi bi-instagram"></i></a>
                    <a href="<?= e(setting('social_whatsapp', '#')) ?>" target="_blank" class="text-secondary fs-5"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>
            <div class="col-lg-2">
                <h6 class="fw-bold text-uppercase mb-3">Tienda</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="<?= APP_URL ?>/products.php" class="text-secondary text-decoration-none">Productos</a></li>
                    <li class="mb-2"><a href="<?= APP_URL ?>/cart.php" class="text-secondary text-decoration-none">Carrito</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h6 class="fw-bold text-uppercase mb-3">Empresa</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="<?= APP_URL ?>/about.php" class="text-secondary text-decoration-none">Sobre Nosotros</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Términos y Condiciones</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Política de Privacidad</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h6 class="fw-bold text-uppercase mb-3">Contacto</h6>
                <ul class="list-unstyled text-secondary">
                    <li class="mb-2"><a href="<?= e(setting('company_map_url', '#')) ?>" target="_blank" class="text-secondary text-decoration-none"><i class="bi bi-geo-alt me-2"></i><?= e(setting('company_address', 'Guatemala')) ?></a></li>
                    <li class="mb-2"><a href="mailto:<?= e(setting('company_email', '')) ?>" class="text-secondary text-decoration-none"><i class="bi bi-envelope me-2"></i><?= e(setting('company_email', '')) ?></a></li>
                    <li class="mb-2"><a href="tel:<?= e(setting('company_phone', '')) ?>" class="text-secondary text-decoration-none"><i class="bi bi-phone me-2"></i><?= e(setting('company_phone_display', '')) ?></a></li>
                </ul>
            </div>
        </div>
        <hr class="border-secondary mt-4">
        <p class="text-center text-secondary mb-0">&copy; <?= date('Y') ?> <?= e(setting('company_name', 'Publiprim')) ?>. Todos los derechos reservados.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?= asset('js/main.js') ?>"></script>
</body>
</html>
