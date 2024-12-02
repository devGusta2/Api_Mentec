<?php

// Adicione os cabeçalhos CORS
header("Access-Control-Allow-Origin: http://localhost:3000"); // Permitir acesso apenas do front-end
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Métodos permitidos
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Cabeçalhos permitidos

require('../Model/Database.php');

$dao = new Database();
$con = $dao->getCon();

// Verifica se é uma requisição OPTIONS
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit; // Encerra a execução para requisições OPTIONS
}

$stmt = $con->prepare("SELECT * FROM user");
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($res);
?>
