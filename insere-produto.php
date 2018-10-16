<?php require_once 'cabecalho.php' ?>
<?php require_once 'banco-produto.php'?>

<?php

$nome = $_POST['nome'];
$preco = $_POST['preco'];




if (insereProduto($nome, $preco)){
?>
<p class="alert alert-success">Produto salvo com sucesso, <?php echo $nome?> , valor , R$ <?php echo $preco ?></p>

<?php }

else{

?>
<p class="alert alert-danger">Não foi possivel salvar o produto.</p>

<?php } ?>





<div class="principal">

</div>
</div>
