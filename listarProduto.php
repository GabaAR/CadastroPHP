<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem De Produtos</title>
</head>

<body>
    <br><br>
    <h3 style="text-align: center;">Listagem de Produtos</h3>
    <br>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Número</th>
                <th scope="col">Nome</th>
                <th scope="col">Estoque</th>
                <th scope="col">Categoria</th>
                <th scope="col">Fornecedor</th>

            </tr>
        </thead>

        <?php

        include 'connet.php';
        $sql = "SELECT * FROM `produtos`";
        $busca = mysqli_query($connet, $sql);
        while ($array = mysqli_fetch_array($busca)) {

            $idProduto = $array['idProduto'];
            $numeroProduto      = $array['numeroProduto'];
            $nomeProduto        = $array['nomeProduto'];
            $quantidadeProduto  = $array['quantidadeProduto'];
            $categoriaProduto   = $array['categoriaProduto'];
            $fornecedorProduto  = $array['fornecedorProduto'];
        

        ?>
        <tr>

            <td><?php echo $numeroProduto ?></td>
            <td> <?php echo $nomeProduto ?></td>
            <td> <?php echo $quantidadeProduto ?></td>
            <td> <?php echo $categoriaProduto ?></td>
            <td> <?php echo $fornecedorProduto ?> </td>
            <td><button type="submit" class="btn btn-outline-dark"><a style="text-decoration: none;  color: #f8f9fa;" href="editarProduto.php?id= <?php echo $idProduto ?>">Editar Produtos</a></button></td>
            <td><button type="submit" class="btn btn-outline-dark"><a style="text-decoration:none; color:red" href="deletarProduto.php?id=<?php echo $idProduto ?>">Excluir</a></button></td>
            
        </tr>
<?php }?>        
    </table>
</body>

</html>