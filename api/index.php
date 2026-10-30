<?php
// Vercel PHP catch-all. Static files are served before this function via vercel.json.
$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$uri = rawurldecode($uri);
$relative = ltrim($uri, '/');
if ($relative === '' || str_ends_with($relative, '/')) $relative .= 'index.php';
$relative = str_replace('\\', '/', $relative);
if (str_contains($relative, "..")) { http_response_code(400); exit('Bad request'); }
$target = realpath(__DIR__ . '/../' . $relative);
$base = realpath(__DIR__ . '/..');
if (!$target || !$base || !str_starts_with($target, $base . DIRECTORY_SEPARATOR) || !is_file($target)) {
    http_response_code(404); exit('Page not found');
}
if (strtolower(pathinfo($target, PATHINFO_EXTENSION)) !== 'php') {
    http_response_code(404); exit('Not found');
}
$_SERVER['SCRIPT_NAME'] = '/' . $relative;
$_SERVER['PHP_SELF'] = '/' . $relative;
$_SERVER['SCRIPT_FILENAME'] = $target;
chdir(dirname($target));
require $target;
