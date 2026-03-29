<?php
$adminTitle = 'Gestión de Materiales';
$adminPage = 'materials';
require_once __DIR__ . '/../config/bootstrap.php';
require_once APP_PATH . '/views/admin/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h5 class="fw-bold mb-1">Materiales</h5>
        <p class="text-muted mb-0 small">Administra los materiales de impresión y sus precios por m²</p>
    </div>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalMaterial">
        <i class="bi bi-plus-lg me-1"></i>Nuevo Material
    </button>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio / m²</th>
                        <th>Estado</th>
                        <th class="text-end">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bold">Lona Vinílica 13oz</td>
                        <td class="text-muted">Lona estándar para interiores y exteriores</td>
                        <td>Q 45.00</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Lona Premium 18oz</td>
                        <td class="text-muted">Lona de alta resistencia para exteriores</td>
                        <td>Q 60.00</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Vinil Adhesivo</td>
                        <td class="text-muted">Vinil blanco brillante para rotulación</td>
                        <td>Q 55.00</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Lona Mesh</td>
                        <td class="text-muted">Lona microperforada para fachadas</td>
                        <td>Q 50.00</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">PVC Espumado 3mm</td>
                        <td class="text-muted">Placa rígida ligera para señalización</td>
                        <td>Q 80.00</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Vinil Reflectivo</td>
                        <td class="text-muted">Alta visibilidad nocturna grado ingeniería</td>
                        <td>Q 120.00</td>
                        <td><span class="badge bg-danger">Inactivo</span></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal: New/Edit Material -->
<div class="modal fade" id="modalMaterial" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Nuevo Material</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="form-material">
                    <div class="mb-3">
                        <label class="form-label">Nombre del material</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea class="form-control" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio por m² (Q)</label>
                        <input type="number" class="form-control" step="0.01" min="0" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Estado</label>
                        <select class="form-select">
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
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
