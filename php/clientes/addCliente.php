<?php
require_once '../init.php';
$cliente_nome = isset($_POST['nome']) ? $_POST['nome'] : null;

if (empty($continente_nome)) {
    echo "Volte e preencha todos os campos";
    exit;
}

$PDO = db_connect();
$sql = "INSERT INTO clientes(nomeCliente) VALUES(:cliente_nome)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':cliente_nome', $cliente_nome);

if ($stmt->execute()) {
    header('Location: ../../mensagem.html');
} else{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}
?>