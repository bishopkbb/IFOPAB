<?php
/**
 * Application bootstrap.
 *
 * Loaded first by every entry point (index.php, 404.php). Keeps
 * environment-aware setup in one place instead of scattered across pages.
 */

declare(strict_types=1);

// Defaults to 'development' so local work fails loudly. Before deploying,
// set the IFOPAB_ENV environment variable to 'production' on the host so
// PHP errors are logged instead of displayed to visitors (see docs/06 and
// docs/10 — production must never expose warnings/notices/stack traces).
$environment = getenv('IFOPAB_ENV') ?: 'development';

if ($environment === 'production') {
    ini_set('display_errors', '0');
    ini_set('display_startup_errors', '0');
    error_reporting(E_ALL);
    ini_set('log_errors', '1');
} else {
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

date_default_timezone_set('UTC');

define('IFOPAB_ENV', $environment);
