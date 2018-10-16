<?php require_once 'cabecalho.php' ?>
<?php require_once 'conexao.php'?>
<?php require_once 'banco-produto.php'?>

<?php
if(array_key_exists("removido", $_GET) && $_GET['removido'] == true){
?>

<p class="alert-success">Produto removido com sucesso</p>
<?php
}
 ?>








<table class="table table-striped table-bordered">
<?php
$produtos = listaProdutos($conexao);
?>
<tr>
  <td>Nome</td>
  <td>Preço</td>
</tr>
<?php
foreach($produtos as $prod){
?>

  <tr>
<td><?= $prod['nome'] ?></td>
<td><?= $prod['preco'] ?></td>
<td><a href="/poo/remove-produto.php?id=<?php echo $prod['id'] ?>" class="text-danger">Remover</a></td>
</tr>
<?php
} ?>
</table>
