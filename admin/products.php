<?php
$adminTitle = 'Gestión de Productos';
$adminPage = 'products';
require_once __DIR__ . '/../config/bootstrap.php';
require_once APP_PATH . '/views/admin/header.php';
?>

<!-- Actions Bar -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h5 class="fw-bold mb-1">Productos</h5>
        <p class="text-muted mb-0 small">Administra el catálogo de productos de la tienda</p>
    </div>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalProduct">
        <i class="bi bi-plus-lg me-1"></i>Nuevo Producto
    </button>
</div>

<!-- Filters -->
<div class="card border-0 shadow-sm mb-4">
    <div class="card-body py-2">
        <div class="row g-2 align-items-center">
            <div class="col-md-4">
                <input type="text" class="form-control form-control-sm" placeholder="Buscar producto...">
            </div>
            <div class="col-md-3">
                <select class="form-select form-select-sm">
                    <option value="">Todas las categorías</option>
                    <option>Lonas y Banners</option>
                    <option>Vinil Adhesivo</option>
                    <option>Señalización</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-select form-select-sm">
                    <option value="">Estado</option>
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>
            <div class="col-md-3 text-end">
                <span class="text-muted small">Mostrando 6 productos</span>
            </div>
        </div>
    </div>
</div>

<!-- Products Table -->
<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Imagen</th>
                        <th>Producto</th>
                        <th>Categoría</th>
                        <th>Precio Base</th>
                        <th>Producción</th>
                        <th>Estado</th>
                        <th class="text-end">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><div class="admin-thumb rounded"><i class="bi bi-image text-secondary"></i></div></td>
                        <td>
                            <strong>Banner Roll Up</strong><br>
                            <small class="text-muted">banner-roll-up</small>
                        </td>
                        <td><span class="badge bg-secondary">Lonas</span></td>
                        <td>Q 250.00</td>
                        <td>48h</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1" title="Editar"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger" title="Eliminar"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><div class="admin-thumb rounded"><i class="bi bi-image text-secondary"></i></div></td>
                        <td>
                            <strong>Vinil Microperforado</strong><br>
                            <small class="text-muted">vinil-microperforado</small>
                        </td>
                        <td><span class="badge bg-secondary">Vinil</span></td>
                        <td>Q 85.00</td>
                        <td>24h</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1" title="Editar"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger" title="Eliminar"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><div class="admin-thumb rounded"><i class="bi bi-image text-secondary"></i></div></td>
                        <td>
                            <strong>Letrero PVC</strong><br>
                            <small class="text-muted">letrero-pvc</small>
                        </td>
                        <td><span class="badge bg-secondary">Señalización</span></td>
                        <td>Q 120.00</td>
                        <td>72h</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1" title="Editar"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger" title="Eliminar"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><div class="admin-thumb rounded"><i class="bi bi-image text-secondary"></i></div></td>
                        <td>
                            <strong>Lona Front</strong><br>
                            <small class="text-muted">lona-front</small>
                        </td>
                        <td><span class="badge bg-secondary">Lonas</span></td>
                        <td>Q 65.00</td>
                        <td>48h</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1" title="Editar"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger" title="Eliminar"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><div class="admin-thumb rounded"><i class="bi bi-image text-secondary"></i></div></td>
                        <td>
                            <strong>Vinil Reflectivo</strong><br>
                            <small class="text-muted">vinil-reflectivo</small>
                        </td>
                        <td><span class="badge bg-secondary">Vinil</span></td>
                        <td>Q 150.00</td>
                        <td>48h</td>
                        <td><span class="badge bg-danger">Inactivo</span></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1" title="Editar"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger" title="Eliminar"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal: New/Edit Product -->
<div class="modal fade" id="modalProduct" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Nuevo Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="form-product">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <label class="form-label">Nombre del producto</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Categoría</label>
                            <select class="form-select" required>
                                <option value="">Seleccionar...</option>
                                <option>Lonas y Banners</option>
                                <option>Vinil Adhesivo</option>
                                <option>Señalización</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Descripción</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Precio base (Q)</label>
                            <input type="number" class="form-control" step="0.01" min="0" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Tiempo de producción</label>
                            <input type="text" class="form-control" placeholder="Ej: 48h">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Estado</label>
                            <select class="form-select">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Imagen del producto</label>
                            <input type="file" class="form-control" accept="image/*">
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-bold">Materiales disponibles</label>
                            <div class="row g-2">
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="mat-1">
                                        <label class="form-check-label" for="mat-1">Lona Vinílica 13oz</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="mat-2">
                                        <label class="form-check-label" for="mat-2">Lona Premium 18oz</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="mat-3">
                                        <label class="form-check-label" for="mat-3">Vinil Adhesivo</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="mat-4">
                                        <label class="form-check-label" for="mat-4">PVC Espumado</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-bold">Acabados disponibles</label>
                            <div class="row g-2">
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="fin-1">
                                        <label class="form-check-label" for="fin-1">Ojales</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="fin-2">
                                        <label class="form-check-label" for="fin-2">Bastilla</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="fin-3">
                                        <label class="form-check-label" for="fin-3">Laminado UV</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary"><i class="bi bi-check-lg me-1"></i>Guardar Producto</button>
            </div>
        </div>
    </div>
</div>

<?php require_once APP_PATH . '/views/admin/footer.php'; ?>
