<?php
$host = getenv('PORTFOLIO_DB_HOST') ?: 'localhost';
$db   = getenv('PORTFOLIO_DB_NAME') ?: 'ko_divinii_portfolio_v2';
$user = getenv('PORTFOLIO_DB_USER') ?: 'root';
$pass = getenv('PORTFOLIO_DB_PASS') ?: '';
$port = getenv('PORTFOLIO_DB_PORT') ?: '3306';
try {
    $pdo = new PDO("mysql:host={$host};port={$port};dbname={$db};charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (PDOException $e) {
    http_response_code(500);
    error_log('Portfolio database connection failed: '.$e->getMessage());
    die('Portfolio database is not connected. Configure PORTFOLIO_DB_* environment variables in Vercel.');
}
