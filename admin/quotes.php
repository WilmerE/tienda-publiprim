<?php
$adminTitle = 'Cotizaciones';
$adminPage = 'quotes';
require_once __DIR__ . '/../config/bootstrap.php';
require_once APP_PATH . '/views/admin/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h5 class="fw-bold mb-1">Cotizaciones</h5>
        <p class="text-muted mb-0 small">Revisa y gestiona las cotizaciones de los clientes</p>
    </div>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Items</th>
                        <th>Total</th>
                        <th>Estado</th>
                        <th>Fecha</th>
                        <th class="text-end">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Q-001</strong></td>
                        <td>Juan Pérez</td>
                        <td>3 items</td>
                        <td>Q 850.00</td>
                        <td><span class="badge bg-warning text-dark">Borrador</span></td>
                        <td>28/03/2026</td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-eye"></i></button>
                            <button class="btn btn-sm btn-outline-success" title="Enviar"><i class="bi bi-send"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Q-002</strong></td>
                        <td>María García</td>
                        <td>1 item</td>
                        <td>Q 1,200.00</td>
                        <td><span class="badge bg-info">Enviada</span></td>
                        <td>27/03/2026</td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-eye"></i></button>
                            <button class="btn btn-sm btn-outline-success" title="Aprobar"><i class="bi bi-check-lg"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Q-003</strong></td>
                        <td>Carlos López</td>
                        <td>5 items</td>
                        <td>Q 3,400.00</td>
                        <td><span class="badge bg-success">Aprobada</span></td>
                        <td>25/03/2026</td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once APP_PATH . '/views/admin/footer.php'; ?>
