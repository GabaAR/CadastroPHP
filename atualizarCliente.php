<?php 

include 'connet.php';
$id = $_POST ['id'];

$nomeCliente        = $_POST['nomeCliente'];
$telefoneCliente    = $_POST['telefoneCliente'];
$emailCliente       = $_POST['emailCliente'];
$enderecoCliente    = $_POST['enderecoCliente'];
$cpfCliente         = $_POST['cpfCliente'];
$generoCliente      = $_POST['generoCliente'];


$sql = "UPDATE `clientes` SET `nomeCliente`='$nomeCliente',`telefoneCliente`='$telefoneCliente', `emailCliente`='$emailCliente',`enderecoCliente`='$enderecoCliente',
`cpfCliente`= $cpfCliente ,`generoCliente`='$generoCliente' WHERE idCliente = $id";
    
    $atualizar = mysqli_query($connet, $sql);

?>
<div style= "width: 300px; text-align:center; padding:40px; margin-left: 750px;">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<h4>Cliente Atualizado com Sucesso!</h4>

<div>
    <a href="listarCliente.php" role="button" class="btn btn-sm btn-outline-dark"> Atualizar novos Clientes? </a>
</div>
</div>