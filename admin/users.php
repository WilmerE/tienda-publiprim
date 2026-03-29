<?php
$adminTitle = 'Usuarios';
$adminPage = 'users';
require_once __DIR__ . '/../config/bootstrap.php';
require_once APP_PATH . '/views/admin/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h5 class="fw-bold mb-1">Usuarios</h5>
        <p class="text-muted mb-0 small">Usuarios registrados en la tienda</p>
    </div>
</div>

<div class="card border-0 shadow-sm mb-4">
    <div class="card-body py-2">
        <div class="row g-2 align-items-center">
            <div class="col-md-5">
                <input type="text" class="form-control form-control-sm" placeholder="Buscar por nombre o email...">
            </div>
            <div class="col-md-3">
                <select class="form-select form-select-sm">
                    <option value="">Proveedor OAuth</option>
                    <option value="google">Google</option>
                    <option value="facebook">Facebook</option>
                </select>
            </div>
            <div class="col-md-4 text-end">
                <span class="text-muted small">156 usuarios registrados</span>
            </div>
        </div>
    </div>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>OAuth</th>
                        <th>Pedidos</th>
                        <th>Registrado</th>
                        <th class="text-end">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="fw-bold">Juan Pérez</td>
                        <td>juan@gmail.com</td>
                        <td>+502 5555-1234</td>
                        <td><i class="bi bi-google text-danger"></i> Google</td>
                        <td><span class="badge bg-primary">5</span></td>
                        <td><small>15/03/2026</small></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td class="fw-bold">María García</td>
                        <td>maria@gmail.com</td>
                        <td>+502 5555-5678</td>
                        <td><i class="bi bi-google text-danger"></i> Google</td>
                        <td><span class="badge bg-primary">3</span></td>
                        <td><small>18/03/2026</small></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td class="fw-bold">Carlos López</td>
                        <td>carlos@facebook.com</td>
                        <td>+502 5555-9012</td>
                        <td><i class="bi bi-facebook text-primary"></i> Facebook</td>
                        <td><span class="badge bg-primary">1</span></td>
                        <td><small>20/03/2026</small></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td class="fw-bold">Ana Martínez</td>
                        <td>ana@gmail.com</td>
                        <td>—</td>
                        <td><i class="bi bi-google text-danger"></i> Google</td>
                        <td><span class="badge bg-primary">2</span></td>
                        <td><small>22/03/2026</small></td>
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
