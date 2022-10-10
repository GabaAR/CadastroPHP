<?php

    include 'connet.php';

    $id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Clientes</title>
</head>

<body>
    <div class="img"><img src="img/businessman-animate.svg" alt="imagens"></div>
    <br>
    <h3 style="text-align: center;">Edição de Clientes</h3>
    <br>
    <section>
        <div class="container tamanho">
            <form action="atualizarCliente.php" method="POST">
                <?php

                $sql = "SELECT * FROM `clientes` WHERE idCliente = $id";

                $busca = mysqli_query($connet, $sql);

                while ($array = mysqli_fetch_array($busca)) {

                    $idCliente          = $array['idCliente'];
                    $nomeCliente        = $array['nomeCliente'];
                    $telefoneCliente    = $array['telefoneCliente'];
                    $emailCliente       = $array['emailCliente'];
                    $enderecoCliente    = $array['enderecoCliente'];
                    $cpfCliente         = $array['cpfCliente'];                   
                    $generoCliente      = $array['generoCliente'];                   

                ?>
                <div class="form-group">
                    <br>
                    <label> Nome: </label>
                    <input type="text" class="form-control" name="nomeCliente"  value = "<?php echo $nomeCliente ?>">

                    <input type="number" class="form-control" name="id" value = "<?php echo $id ?>" style="display: none;" >
                    <br>
                </div>
                <div class="form-group">
                    <label> Telefone: </label>
                    <input type="text" class="form-control" name="telefoneCliente"  value = "<?php echo $telefoneCliente ?>">
                    <br>
                </div>
                <div class="form-group">
                    <label> E-mail: </label>
                    <input type="text" class="form-control" name="emailCliente"  value = "<?php echo $emailCliente ?>">
                    <br>
                </div>
                <div class="form-group">
                    <label> Endereço: </label>
                    <input type="text" class="form-control" name="enderecoCliente"  value = "<?php echo $enderecoCliente ?>">
                    <br>
                </div>
                <div class="form-group">
                    <label> CPF: </label>
                    <input type="number" class="form-control" name="cpfCliente"  value = "<?php echo $cpfCliente ?>">
                    <br>
                </div>
                <div class="form-group">
                    <label> Gênero: </label>
                    <select class="form-control"  name="generoCliente">
                        <option> Masculino </option>
                        <option> Feminino </option>
                        
                    </select>
                    <br>
                </div>
                <br>
                <div class="button1"><button type="submit" class="btn btn-outline-dark">Atualizar</button></div>
                <br>
                <?php } ?>
            </form>
        </div>
    </section>
</body>

</html>