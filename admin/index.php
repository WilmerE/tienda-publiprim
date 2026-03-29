<?php
$adminTitle = 'Dashboard';
$adminPage = 'dashboard';
require_once __DIR__ . '/../config/bootstrap.php';
require_once APP_PATH . '/views/admin/header.php';
?>

<!-- Stats Cards -->
<div class="row g-4 mb-4">
    <div class="col-md-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <p class="text-muted mb-1 small text-uppercase">Ventas del Día</p>
                        <h3 class="fw-bold mb-0">Q 1,250.00</h3>
                    </div>
                    <div class="stat-icon bg-primary bg-opacity-10 text-primary rounded p-2">
                        <i class="bi bi-currency-dollar fs-4"></i>
                    </div>
                </div>
                <small class="text-success"><i class="bi bi-arrow-up"></i> +12% vs ayer</small>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <p class="text-muted mb-1 small text-uppercase">Pedidos Hoy</p>
                        <h3 class="fw-bold mb-0">8</h3>
                    </div>
                    <div class="stat-icon bg-success bg-opacity-10 text-success rounded p-2">
                        <i class="bi bi-bag-check fs-4"></i>
                    </div>
                </div>
                <small class="text-muted">3 pendientes de producción</small>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <p class="text-muted mb-1 small text-uppercase">Productos</p>
                        <h3 class="fw-bold mb-0">42</h3>
                    </div>
                    <div class="stat-icon bg-info bg-opacity-10 text-info rounded p-2">
                        <i class="bi bi-box-seam fs-4"></i>
                    </div>
                </div>
                <small class="text-muted">6 categorías activas</small>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <p class="text-muted mb-1 small text-uppercase">Usuarios</p>
                        <h3 class="fw-bold mb-0">156</h3>
                    </div>
                    <div class="stat-icon bg-warning bg-opacity-10 text-warning rounded p-2">
                        <i class="bi bi-people fs-4"></i>
                    </div>
                </div>
                <small class="text-muted">12 nuevos esta semana</small>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    <!-- Recent Orders -->
    <div class="col-xl-8">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
                <h6 class="fw-bold mb-0">Pedidos Recientes</h6>
                <a href="orders.php" class="btn btn-sm btn-outline-primary">Ver todos</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Cliente</th>
                                <th>Total</th>
                                <th>Estado Pago</th>
                                <th>Estado Pedido</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>001</strong></td>
                                <td>Juan Pérez</td>
                                <td>Q 450.00</td>
                                <td><span class="badge bg-success">Pagado</span></td>
                                <td><span class="badge bg-warning text-dark">En producción</span></td>
                                <td>28/03/2026</td>
                            </tr>
                            <tr>
                                <td><strong>002</strong></td>
                                <td>María García</td>
                                <td>Q 320.00</td>
                                <td><span class="badge bg-success">Pagado</span></td>
                                <td><span class="badge bg-info">Diseño</span></td>
                                <td>28/03/2026</td>
                            </tr>
                            <tr>
                                <td><strong>003</strong></td>
                                <td>Carlos López</td>
                                <td>Q 180.00</td>
                                <td><span class="badge bg-danger">Pendiente</span></td>
                                <td><span class="badge bg-secondary">Pendiente</span></td>
                                <td>27/03/2026</td>
                            </tr>
                            <tr>
                                <td><strong>004</strong></td>
                                <td>Ana Martínez</td>
                                <td>Q 1,200.00</td>
                                <td><span class="badge bg-success">Pagado</span></td>
                                <td><span class="badge bg-primary">Impresión</span></td>
                                <td>27/03/2026</td>
                            </tr>
                            <tr>
                                <td><strong>005</strong></td>
                                <td>Roberto Díaz</td>
                                <td>Q 95.00</td>
                                <td><span class="badge bg-success">Pagado</span></td>
                                <td><span class="badge bg-success">Entregado</span></td>
                                <td>26/03/2026</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Products -->
    <div class="col-xl-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3">
                <h6 class="fw-bold mb-0">Productos Más Vendidos</h6>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <div class="top-product-img rounded d-flex align-items-center justify-content-center">
                            <i class="bi bi-image text-secondary small"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 small fw-bold">Banner Roll Up</h6>
                            <small class="text-muted">32 vendidos</small>
                        </div>
                    </div>
                    <span class="fw-bold text-primary small">Q 8,000</span>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <div class="top-product-img rounded d-flex align-items-center justify-content-center">
                            <i class="bi bi-image text-secondary small"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 small fw-bold">Vinil Microperforado</h6>
                            <small class="text-muted">28 vendidos</small>
                        </div>
                    </div>
                    <span class="fw-bold text-primary small">Q 2,380</span>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <div class="top-product-img rounded d-flex align-items-center justify-content-center">
                            <i class="bi bi-image text-secondary small"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 small fw-bold">Letrero PVC</h6>
                            <small class="text-muted">21 vendidos</small>
                        </div>
                    </div>
                    <span class="fw-bold text-primary small">Q 2,520</span>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <div class="top-product-img rounded d-flex align-items-center justify-content-center">
                            <i class="bi bi-image text-secondary small"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 small fw-bold">Lona Front</h6>
                            <small class="text-muted">18 vendidos</small>
                        </div>
                    </div>
                    <span class="fw-bold text-primary small">Q 1,170</span>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                        <div class="top-product-img rounded d-flex align-items-center justify-content-center">
                            <i class="bi bi-image text-secondary small"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 small fw-bold">Acrílico Grabado</h6>
                            <small class="text-muted">15 vendidos</small>
                        </div>
                    </div>
                    <span class="fw-bold text-primary small">Q 3,000</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Production Queue -->
<div class="card border-0 shadow-sm mt-4">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h6 class="fw-bold mb-0"><i class="bi bi-kanban me-2"></i>Cola de Producción</h6>
    </div>
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-2">
                <div class="text-center p-3 bg-secondary bg-opacity-10 rounded">
                    <h4 class="fw-bold mb-0">2</h4>
                    <small class="text-muted">Pendientes</small>
                </div>
            </div>
            <div class="col-md-2">
                <div class="text-center p-3 bg-info bg-opacity-10 rounded">
                    <h4 class="fw-bold mb-0">1</h4>
                    <small class="text-muted">Diseño</small>
                </div>
            </div>
            <div class="col-md-2">
                <div class="text-center p-3 bg-primary bg-opacity-10 rounded">
                    <h4 class="fw-bold mb-0">3</h4>
                    <small class="text-muted">Impresión</small>
                </div>
            </div>
            <div class="col-md-2">
                <div class="text-center p-3 bg-warning bg-opacity-10 rounded">
                    <h4 class="fw-bold mb-0">1</h4>
                    <small class="text-muted">Corte</small>
                </div>
            </div>
            <div class="col-md-2">
                <div class="text-center p-3 bg-purple bg-opacity-10 rounded" style="background: rgba(111,66,193,0.1);">
                    <h4 class="fw-bold mb-0">1</h4>
                    <small class="text-muted">Acabado</small>
                </div>
            </div>
            <div class="col-md-2">
                <div class="text-center p-3 bg-success bg-opacity-10 rounded">
                    <h4 class="fw-bold mb-0">2</h4>
                    <small class="text-muted">Listos</small>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once APP_PATH . '/views/admin/footer.php'; ?>
