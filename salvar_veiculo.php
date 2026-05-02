<?php
header("Content-Type: application/json; charset=UTF-8");
require_once "conexao.php";

$campos = [
    "placa", "marca", "modelo", "ano_fabricacao", "ano_modelo",
    "cor", "combustivel", "quilometragem", "chassi",
    "renavam", "data_cadastro", "observacoes"
];

foreach ($campos as $campo) {
    if (!isset($_POST[$campo]) || trim($_POST[$campo]) === "") {
        echo json_encode([
            "sucesso" => false,
            "mensagem" => "Todos os campos são obrigatórios."
        ]);
        exit;
    }
}

$placa = $_POST["placa"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$ano_fabricacao = intval($_POST["ano_fabricacao"]);
$ano_modelo = intval($_POST["ano_modelo"]);
$cor = $_POST["cor"];
$combustivel = $_POST["combustivel"];
$quilometragem = intval($_POST["quilometragem"]);
$chassi = $_POST["chassi"];
$renavam = $_POST["renavam"];
$data_cadastro = $_POST["data_cadastro"];
$observacoes = $_POST["observacoes"];

$sql = "INSERT INTO veiculos 
(placa, marca, modelo, ano_fabricacao, ano_modelo, cor, combustivel, quilometragem, chassi, renavam, data_cadastro, observacoes)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "sssiississss",
    $placa,
    $marca,
    $modelo,
    $ano_fabricacao,
    $ano_modelo,
    $cor,
    $combustivel,
    $quilometragem,
    $chassi,
    $renavam,
    $data_cadastro,
    $observacoes
);

if ($stmt->execute()) {
    echo json_encode([
        "sucesso" => true,
        "mensagem" => "Veículo cadastrado com sucesso!"
    ]);
} else {
    echo json_encode([
        "sucesso" => false,
        "mensagem" => "Erro ao cadastrar veículo."
    ]);
}

$stmt->close();
$conn->close();
?>
