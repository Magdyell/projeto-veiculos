<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "sistema_veiculos";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die(json_encode([
        "sucesso" => false,
        "mensagem" => "Erro na conexão com o banco de dados."
    ]));
}

$conn->set_charset("utf8");
?>
