<?php
$adminTitle = 'Gestión de Categorías';
$adminPage = 'categories';
require_once __DIR__ . '/../config/bootstrap.php';
require_once APP_PATH . '/views/admin/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h5 class="fw-bold mb-1">Categorías</h5>
        <p class="text-muted mb-0 small">Organiza los productos por categoría</p>
    </div>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCategory">
        <i class="bi bi-plus-lg me-1"></i>Nueva Categoría
    </button>
</div>

<div class="row g-4">
    <!-- Category Card -->
    <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="admin-category-img d-flex align-items-center justify-content-center">
                <i class="bi bi-image text-secondary fs-1"></i>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h6 class="fw-bold mb-0">Lonas y Banners</h6>
                    <span class="badge bg-success">Activa</span>
                </div>
                <p class="text-muted small mb-3">Impresión en lona vinílica para interiores y exteriores.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">12 productos</small>
                    <div>
                        <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-warning"><i class="bi bi-eye-slash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="admin-category-img d-flex align-items-center justify-content-center">
                <i class="bi bi-image text-secondary fs-1"></i>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h6 class="fw-bold mb-0">Vinil Adhesivo</h6>
                    <span class="badge bg-success">Activa</span>
                </div>
                <p class="text-muted small mb-3">Vinil de corte e impresión para rotulación y decoración.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">8 productos</small>
                    <div>
                        <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-warning"><i class="bi bi-eye-slash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="admin-category-img d-flex align-items-center justify-content-center">
                <i class="bi bi-image text-secondary fs-1"></i>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h6 class="fw-bold mb-0">Señalización</h6>
                    <span class="badge bg-success">Activa</span>
                </div>
                <p class="text-muted small mb-3">Rótulos, señales de seguridad y letreros personalizados.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">6 productos</small>
                    <div>
                        <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-warning"><i class="bi bi-eye-slash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="admin-category-img d-flex align-items-center justify-content-center">
                <i class="bi bi-image text-secondary fs-1"></i>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h6 class="fw-bold mb-0">Papelería Corporativa</h6>
                    <span class="badge bg-danger">Inactiva</span>
                </div>
                <p class="text-muted small mb-3">Tarjetas de presentación, volantes y más.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">0 productos</small>
                    <div>
                        <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-success"><i class="bi bi-eye"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: New/Edit Category -->
<div class="modal fade" id="modalCategory" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Nueva Categoría</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="form-category">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Imagen</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Estado</label>
                        <select class="form-select">
                            <option value="1">Activa</option>
                            <option value="0">Inactiva</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary"><i class="bi bi-check-lg me-1"></i>Guardar</button>
            </div>
        </div>
    </div>
</div>

<?php require_once APP_PATH . '/views/admin/footer.php'; ?>
