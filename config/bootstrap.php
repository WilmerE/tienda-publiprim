<?php
/**
 * Application bootstrap
 */
session_start();

// Base path
define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');
define('CONFIG_PATH', BASE_PATH . '/config');
define('STORAGE_PATH', BASE_PATH . '/storage');
define('PUBLIC_PATH', BASE_PATH . '/public');

// Load config
$appConfig = require CONFIG_PATH . '/app.php';
$dbConfig  = require CONFIG_PATH . '/database.php';

define('APP_NAME', $appConfig['name']);
define('APP_URL', $appConfig['url']);
define('ADMIN_URL', $appConfig['admin_url']);
define('CURRENCY', $appConfig['currency_symbol']);

// Timezone
date_default_timezone_set($appConfig['timezone']);

// Database connection (PDO)
try {
    $dsn = "mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']};charset={$dbConfig['charset']}";
    $pdo = new PDO($dsn, $dbConfig['user'], $dbConfig['pass'], [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);
} catch (PDOException $e) {
    // In production, log instead of display
    die('Error de conexión a la base de datos.');
}

// CSRF token helper
function csrf_token(): string {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function csrf_field(): string {
    return '<input type="hidden" name="csrf_token" value="' . htmlspecialchars(csrf_token()) . '">';
}

function verify_csrf(string $token): bool {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// Escape output helper
function e(?string $value): string {
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

// Asset URL helper
function asset(string $path): string {
    return APP_URL . '/assets/' . ltrim($path, '/');
}

// Load company settings from DB
$settings = [];
try {
    $stmtSettings = $pdo->query('SELECT key_name, value FROM settings');
    while ($row = $stmtSettings->fetch()) {
        $settings[$row['key_name']] = $row['value'];
    }
} catch (PDOException $e) {
    // Settings table may not exist yet
}

// Helper to get a setting value
function setting(string $key, string $default = ''): string {
    global $settings;
    return $settings[$key] ?? $default;
}
