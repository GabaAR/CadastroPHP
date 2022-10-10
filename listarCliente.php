<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem De Clientes</title>
</head>

<body>
    <br><br>
    <h3 style="text-align: center;">Listagem de Clientes</h3>
    <br>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">E-mail</th>
                <th scope="col">Endereço</th>
                <th scope="col">CPF</th>
                <th scope="col">Gênero</th>

            </tr>
        </thead>

        <?php

        include 'connet.php';
        $sql = "SELECT * FROM `clientes`";
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
        <tr>

            <td> <?php echo $nomeCliente        ?></td>
            <td> <?php echo $telefoneCliente    ?></td>
            <td> <?php echo $emailCliente       ?></td>
            <td> <?php echo $enderecoCliente    ?></td>
            <td> <?php echo $cpfCliente         ?> </td>
            <td> <?php echo $generoCliente      ?> </td>
            
            <td><button type="submit" class="btn btn-outline-dark"><a style="text-decoration: none;  color: #f8f9fa;" href="editarCliente.php?id=<?php echo $idCliente?>">Editar Clientes</a></button></td>
            <td><button type="submit" class="btn btn-outline-dark"><a style="text-decoration:none; color:red" href="deletarCliente.php?id=<?php echo $idCliente ?>">Excluir</a></button></td>
        </tr>
<?php }?> 
    </table>
</body>

</html>