<?php
header("Content-Type: application/json; charset=UTF-8");
require_once "conexao.php";

$sql = "SELECT * FROM veiculos ORDER BY id DESC";
$resultado = $conn->query($sql);

$veiculos = [];

while ($linha = $resultado->fetch_assoc()) {
    $veiculos[] = $linha;
}

echo json_encode($veiculos);

$conn->close();
?>
