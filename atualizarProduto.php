<?php 

include 'connet.php';
$id = $_POST ['id'];

$numeroProduto      = $_POST ['numeroProduto'];
$nomeProduto        = $_POST ['nomeProduto'];
$quantidadeProduto  = $_POST ['quantidadeProduto'];
$categoriaProduto   = $_POST ['categoriaProduto'];
$fornecedorProduto  = $_POST ['fornecedorProduto'];

$sql = "UPDATE `produtos` SET `numeroProduto`= $numeroProduto, `nomeProduto`='$nomeProduto', `quantidadeProduto`= $quantidadeProduto, `categoriaProduto`='$categoriaProduto', 
`fornecedorProduto`='$fornecedorProduto' WHERE idProduto = $id";

    $atualizar = mysqli_query($connet, $sql);

?>
<div style= "width: 300px; text-align:center; padding:40px; margin-left: 750px;">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<h4>Produto Atualizado com Sucesso!</h4>

<div>
    <a href="listarProduto.php" role="button" class="btn btn-sm btn-outline-dark"> Atualizar novos Itens? </a>
</div>
</div>