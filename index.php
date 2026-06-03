<?php
header('Content-Type: application/json');
include 'config.php';

echo json_encode([
    "mensaje" => "Hola, soy la API de Xtore y estoy conectada a Railway",
    "estado" => "operativo"
]);
?>
