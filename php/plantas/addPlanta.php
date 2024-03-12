<?php
    require_once '../init.php';

    $planta_nome = isset($_POST['nome']) ? $_POST['nome'] : null;
    $cliente_nome = isset($_POST['cliente']) ? $_POST['cliente'] : null;

    if (empty($planta_nome) || empty($cliente_nome)) {
        echo "Volte e preencha todos os campos";
        exit;
    }

    $PDO = db_connect();
    $sql = "INSERT INTO plantas(nomePlanta, id_cliente) VALUES(:planta_nome, :cliente_nome)";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':planta_nome', $planta_nome);
    $stmt->bindParam(':cliente_nome', $cliente_nome);

    if ($stmt->execute()) {
        header('Location: ../../mensagem.html');
    } else{
        echo "Erro ao cadastrar";
        print_r($stmt->errorInfo());
    }
?>