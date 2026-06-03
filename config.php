<?php
$host     = 'zephyr.proxy.rlwy.net';
$port     = '58656';
$dbname   = 'railway';
$user     = 'postgres';
$password = 'ecsicVjOBSbizhnhMcicgwtDQZUmSVIv';

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>