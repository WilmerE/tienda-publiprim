<?php
$adminTitle = 'Gestión de Pedidos';
$adminPage = 'orders';
require_once __DIR__ . '/../config/bootstrap.php';
require_once APP_PATH . '/views/admin/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h5 class="fw-bold mb-1">Pedidos</h5>
        <p class="text-muted mb-0 small">Administra y da seguimiento a los pedidos</p>
    </div>
    <div class="d-flex gap-2">
        <select class="form-select form-select-sm" style="width: auto;">
            <option value="">Todos los estados</option>
            <option value="pending">Pendiente</option>
            <option value="design">Diseño</option>
            <option value="printing">Impresión</option>
            <option value="cutting">Corte</option>
            <option value="finishing">Acabado</option>
            <option value="ready">Listo</option>
            <option value="delivered">Entregado</option>
        </select>
        <select class="form-select form-select-sm" style="width: auto;">
            <option value="">Pago: Todos</option>
            <option value="paid">Pagado</option>
            <option value="pending">Pendiente</option>
            <option value="failed">Fallido</option>
        </select>
    </div>
</div>

<!-- Status Summary -->
<div class="row g-3 mb-4">
    <div class="col">
        <div class="card border-0 shadow-sm text-center p-3">
            <h4 class="fw-bold text-warning mb-0">5</h4>
            <small class="text-muted">Pendientes</small>
        </div>
    </div>
    <div class="col">
        <div class="card border-0 shadow-sm text-center p-3">
            <h4 class="fw-bold text-info mb-0">3</h4>
            <small class="text-muted">En producción</small>
        </div>
    </div>
    <div class="col">
        <div class="card border-0 shadow-sm text-center p-3">
            <h4 class="fw-bold text-primary mb-0">2</h4>
            <small class="text-muted">Listos</small>
        </div>
    </div>
    <div class="col">
        <div class="card border-0 shadow-sm text-center p-3">
            <h4 class="fw-bold text-success mb-0">18</h4>
            <small class="text-muted">Entregados</small>
        </div>
    </div>
</div>

<!-- Orders Table -->
<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Pedido #</th>
                        <th>Cliente</th>
                        <th>Items</th>
                        <th>Total</th>
                        <th>Pago</th>
                        <th>Estado</th>
                        <th>Fecha</th>
                        <th class="text-end">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>#001</strong></td>
                        <td>
                            <div>Juan Pérez</div>
                            <small class="text-muted">juan@email.com</small>
                        </td>
                        <td>2 items</td>
                        <td class="fw-bold">Q 450.00</td>
                        <td><span class="badge bg-success">Pagado</span></td>
                        <td>
                            <select class="form-select form-select-sm" style="width: auto;">
                                <option value="pending">Pendiente</option>
                                <option value="design">Diseño</option>
                                <option value="printing" selected>Impresión</option>
                                <option value="cutting">Corte</option>
                                <option value="finishing">Acabado</option>
                                <option value="ready">Listo</option>
                                <option value="delivered">Entregado</option>
                            </select>
                        </td>
                        <td><small>28/03/2026</small></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalOrderDetail">
                                <i class="bi bi-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>#002</strong></td>
                        <td>
                            <div>María García</div>
                            <small class="text-muted">maria@email.com</small>
                        </td>
                        <td>1 item</td>
                        <td class="fw-bold">Q 320.00</td>
                        <td><span class="badge bg-success">Pagado</span></td>
                        <td>
                            <select class="form-select form-select-sm" style="width: auto;">
                                <option value="pending">Pendiente</option>
                                <option value="design" selected>Diseño</option>
                                <option value="printing">Impresión</option>
                                <option value="cutting">Corte</option>
                                <option value="finishing">Acabado</option>
                                <option value="ready">Listo</option>
                                <option value="delivered">Entregado</option>
                            </select>
                        </td>
                        <td><small>28/03/2026</small></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>#003</strong></td>
                        <td>
                            <div>Carlos López</div>
                            <small class="text-muted">carlos@email.com</small>
                        </td>
                        <td>3 items</td>
                        <td class="fw-bold">Q 180.00</td>
                        <td><span class="badge bg-danger">Pendiente</span></td>
                        <td>
                            <select class="form-select form-select-sm" style="width: auto;">
                                <option value="pending" selected>Pendiente</option>
                                <option value="design">Diseño</option>
                                <option value="printing">Impresión</option>
                                <option value="cutting">Corte</option>
                                <option value="finishing">Acabado</option>
                                <option value="ready">Listo</option>
                                <option value="delivered">Entregado</option>
                            </select>
                        </td>
                        <td><small>27/03/2026</small></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>#004</strong></td>
                        <td>
                            <div>Ana Martínez</div>
                            <small class="text-muted">ana@email.com</small>
                        </td>
                        <td>1 item</td>
                        <td class="fw-bold">Q 1,200.00</td>
                        <td><span class="badge bg-success">Pagado</span></td>
                        <td>
                            <select class="form-select form-select-sm" style="width: auto;">
                                <option value="pending">Pendiente</option>
                                <option value="design">Diseño</option>
                                <option value="printing">Impresión</option>
                                <option value="cutting">Corte</option>
                                <option value="finishing">Acabado</option>
                                <option value="ready" selected>Listo</option>
                                <option value="delivered">Entregado</option>
                            </select>
                        </td>
                        <td><small>26/03/2026</small></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal: Order Detail -->
<div class="modal fade" id="modalOrderDetail" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Pedido #001</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row g-4">
                    <div class="col-md-6">
                        <h6 class="fw-bold text-muted text-uppercase small">Cliente</h6>
                        <p class="mb-1"><strong>Juan Pérez</strong></p>
                        <p class="mb-1 text-muted">juan@email.com</p>
                        <p class="mb-0 text-muted">+502 5555-1234</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold text-muted text-uppercase small">Dirección de Entrega</h6>
                        <p class="mb-1">5ta Avenida 12-34, Zona 10</p>
                        <p class="mb-0 text-muted">Ciudad de Guatemala</p>
                    </div>
                </div>
                <hr>
                <h6 class="fw-bold text-muted text-uppercase small">Items del Pedido</h6>
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Material</th>
                            <th>Medidas</th>
                            <th>Cant.</th>
                            <th class="text-end">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Banner Roll Up</td>
                            <td>Lona Vinílica 13oz</td>
                            <td>0.80 × 2.00 m</td>
                            <td>1</td>
                            <td class="text-end">Q 250.00</td>
                        </tr>
                        <tr>
                            <td>Vinil Microperforado</td>
                            <td>Vinil Adhesivo</td>
                            <td>1.00 × 2.00 m</td>
                            <td>1</td>
                            <td class="text-end">Q 200.00</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" class="text-end fw-bold">Total:</td>
                            <td class="text-end fw-bold text-primary">Q 450.00</td>
                        </tr>
                    </tfoot>
                </table>
                <hr>
                <h6 class="fw-bold text-muted text-uppercase small">Archivos de Diseño</h6>
                <div class="d-flex align-items-center gap-2 bg-light p-2 rounded">
                    <i class="bi bi-file-earmark-pdf text-danger fs-5"></i>
                    <div>
                        <small class="fw-bold">diseno-banner.pdf</small>
                        <small class="text-muted d-block">2.4 MB · Subido 28/03/2026</small>
                    </div>
                    <a href="#" class="btn btn-sm btn-outline-primary ms-auto"><i class="bi bi-download"></i></a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<?php require_once APP_PATH . '/views/admin/footer.php'; ?>
