<?php
    require_once '../init.php';
    $PDO = db_connect();
    $sql = "SELECT id, nome FROM Plantas";
    $stmt = $PDO->prepare($sql);
    $stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <title>adicionar planta</title>
    <link rel="stylesheet" href="../../css/estilo.css">
</head>
<header>
    <nav class="nav bg-success font-weight-bold justify-content-center">
        <a href="../../index.html" class="nav-link text-dark">Início</a>
    </nav>
</header>
<body>
    <div class="container">
        <form action="addPlanta.php" method="post">
            <div class="form-group">
                <label for="nome">Nome planta: </label>
                <input type="text" class="form-control" name="nome" placeholder="Digite o nome da planta">
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

    <div class="container-fluid fixed-bottom bg-success">
        <div class="card-footer text-center">
            <p class="text-dark font-weight-bold">CEFET-MG Varginha 2024</p>
        </div>
    </div>
</body>
</html>