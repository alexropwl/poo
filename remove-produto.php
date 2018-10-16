<?php require_once'cabecalho.php'?>
<?php require_once'conexao.php' ?>
<?php require_once 'banco-produto.php'?>
<?php


$id = $_GET['id'];

removeProduto($conexao, $id);

?>

<p class="text-success">Produdo removido.</p>

<?php
header('Location:produto-lista.php?removido=true');
die();

 ?>
