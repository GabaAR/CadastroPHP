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
    <title>Edição de Produtos</title>
</head>

<body>
    <div class="img"><img src="img/cohort-analysis-animate.svg" alt="imagens"></div>
    <br>
    <h3 style="text-align: center;">Edição de Produtos</h3>
    <br>
    <section>
        <div class="container tamanho">
            <form action="atualizarProduto.php" method="POST">
                <?php

                $sql = "SELECT * FROM `produtos` WHERE idProduto = $id";

                $busca = mysqli_query($connet, $sql);

                while ($array = mysqli_fetch_array($busca)) {

                    $idProduto          = $array['idProduto'];
                    $numeroProduto      = $array['numeroProduto'];
                    $nomeProduto        = $array['nomeProduto'];
                    $quantidadeProduto  = $array['quantidadeProduto'];
                    $categoriaProduto   = $array['categoriaProduto'];
                    $fornecedorProduto  = $array['fornecedorProduto'];
                

                ?>
                <div class="form-group">
                    <br>
                    <label> Código do Produto: </label>
                    <input type="text" class="form-control" name="numeroProduto" value = "<?php echo $numeroProduto ?>">

                    <input type="text" class="form-control" name="id" value = "<?php echo $id ?> " style= "display:none;" >
                    <br>
                </div>
                <div class="form-group">
                    <label> Nome do Produto: </label>
                    <input type="text" class="form-control" name="nomeProduto" value = "<?php echo $nomeProduto ?>">
                    <br>
                </div>
                <div class="form-group">
                    <label> Quantidade do Produto: </label>
                    <input type="number" class="form-control" name="quantidadeProduto" value = "<?php echo $quantidadeProduto ?>">
                    <br>
                </div>
                <div class="form-group">
                    <label> Categoria: </label>
                    <select class="form-control" name="categoriaProduto">
                        <option> Headset </option>
                        <option> Mouse </option>
                        <option> Teclado </option>
                        <option> Monitor </option>
                        <option> Softwares </option>

                    </select>
                    <br>
                </div>
                <div class="form-group">
                    <label> Fornecedores: </label>
                    <select class="form-control" name="fornecedorProduto">
                        <option> Microsoft </option>
                        <option> Lenovo </option>
                        <option> Positivo </option>
                        <option> Dell </option>
                        <option> Apple </option>

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