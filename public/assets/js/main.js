/**
 * Publiprim Store - Main JavaScript
 */
document.addEventListener('DOMContentLoaded', () => {

    // --- Hero Swiper Carousel (3D Coverflow) ---
    if (document.querySelector('.hero-swiper')) {
        new Swiper('.hero-swiper', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            loop: true,
            speed: 800,
            autoplay: { delay: 3000, disableOnInteraction: false, pauseOnMouseEnter: true },
            coverflowEffect: {
                rotate: 20,
                stretch: 80,
                depth: 200,
                modifier: 1,
                slideShadows: false
            },
            pagination: { el: '.hero-pagination', clickable: true },
        });
    }

    // --- Quantity Buttons (Product Detail) ---
    const qtyMinus = document.getElementById('btn-qty-minus');
    const qtyPlus = document.getElementById('btn-qty-plus');
    const qtyInput = document.getElementById('input-quantity');

    if (qtyMinus && qtyPlus && qtyInput) {
        qtyMinus.addEventListener('click', () => {
            const val = parseInt(qtyInput.value, 10);
            if (val > 1) qtyInput.value = val - 1;
        });
        qtyPlus.addEventListener('click', () => {
            qtyInput.value = parseInt(qtyInput.value, 10) + 1;
        });
    }

    // --- Quantity Buttons (Cart) ---
    document.querySelectorAll('.btn-qty-minus').forEach(btn => {
        btn.addEventListener('click', () => {
            const input = btn.closest('.input-group').querySelector('input');
            const val = parseInt(input.value, 10);
            if (val > 1) input.value = val - 1;
        });
    });

    document.querySelectorAll('.btn-qty-plus').forEach(btn => {
        btn.addEventListener('click', () => {
            const input = btn.closest('.input-group').querySelector('input');
            input.value = parseInt(input.value, 10) + 1;
        });
    });

    // --- Payment Option Selection (Checkout) ---
    document.querySelectorAll('.payment-option input[type="radio"]').forEach(radio => {
        radio.addEventListener('change', () => {
            const cardForm = document.getElementById('card-form');
            if (cardForm) {
                cardForm.style.display = radio.value === 'card' ? 'block' : 'none';
            }
        });
    });

    // --- Add to Cart Button (Product Detail) ---
    const btnAddCart = document.getElementById('btn-add-cart');
    if (btnAddCart) {
        btnAddCart.addEventListener('click', () => {
            btnAddCart.innerHTML = '<i class="bi bi-check-lg me-2"></i>Agregado al Carrito';
            btnAddCart.classList.replace('btn-primary', 'btn-success');
            setTimeout(() => {
                btnAddCart.innerHTML = '<i class="bi bi-cart-plus me-2"></i>Agregar al Carrito';
                btnAddCart.classList.replace('btn-success', 'btn-primary');
            }, 2000);
        });
    }

    // --- Filter Button (Products) ---
    const btnFilters = document.getElementById('btn-apply-filters');
    if (btnFilters) {
        btnFilters.addEventListener('click', () => {
            // Placeholder: will connect to backend in Phase 2
            btnFilters.innerHTML = '<i class="bi bi-check me-1"></i> Filtros aplicados';
            setTimeout(() => {
                btnFilters.innerHTML = '<i class="bi bi-search me-1"></i> Aplicar Filtros';
            }, 1500);
        });
    }

});
