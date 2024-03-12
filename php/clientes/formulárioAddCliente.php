<?php
require_once '../init.php';
$PDO = db_connect();
$sql = "SELECT id, nome FROM Cliente";
$stmt = $PDO->prepare($sql);
$stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adicionar cliente</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>

<body>
    <div class="container">
        <form action="addCliente.php" method="post">
            <div class="form-group">
                <label for="nome">Nome cliente: </label>
                <input type="text" class="form-control" name="nome" placeholder="Digite seu nome completogit">
            </div>
            <div class="form-group">
                <label for="dataNascimento">Cliente responsável: </label>
                <input type="checkbox" class="form-control">
            </div>
            <?php while($plantas = $stmt->fetch(PDO::FETCH_ASSOC)):?>
                    <option value="<?php echo $plantas['id'] ?>"><?php echo $plantas['nome'] ?></option>
            <?php endwhile; ?>
            </select> <br> <br>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Enviar</button>
                <a class="btn btn-danger" href="../../index.html">Cancelar</a>
            </div>
        </form>
    </div>

</body>

</html>