<?php
$adminTitle = 'Gestión de Acabados';
$adminPage = 'finishes';
require_once __DIR__ . '/../config/bootstrap.php';
require_once APP_PATH . '/views/admin/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h5 class="fw-bold mb-1">Acabados</h5>
        <p class="text-muted mb-0 small">Administra los acabados y sus precios adicionales</p>
    </div>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalFinish">
        <i class="bi bi-plus-lg me-1"></i>Nuevo Acabado
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
                        <th>Precio Adicional</th>
                        <th class="text-end">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bold">Ojales</td>
                        <td class="text-muted">Ojales metálicos cada 50cm</td>
                        <td>Q 5.00</td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Bastilla reforzada</td>
                        <td class="text-muted">Costura perimetral con hilo resistente</td>
                        <td>Q 10.00</td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Laminado UV</td>
                        <td class="text-muted">Protección contra rayos UV y desgaste</td>
                        <td>Q 25.00</td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Corte de forma</td>
                        <td class="text-muted">Corte personalizado según diseño</td>
                        <td>Q 15.00</td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Doble cara</td>
                        <td class="text-muted">Impresión por ambos lados del material</td>
                        <td>Q 40.00</td>
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

<!-- Modal -->
<div class="modal fade" id="modalFinish" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Nuevo Acabado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="form-finish">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea class="form-control" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio adicional (Q)</label>
                        <input type="number" class="form-control" step="0.01" min="0" required>
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
