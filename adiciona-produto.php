<?php require_once 'cabecalho.php' ?>


<div class="container">
  <div class="principal">
    <h1>Produto</h1>

    <form method="post" action="insere-produto.php">
      <table class="table">
          <tr>
        <td>Nome:</td>
      <td>  <input type="text" name="nome" class="form-control" /></td>
    </tr>
    <tr>

      <td>  Preço:</td>
         <td><input type="number" name="preco" class="form-control" /> </td>
       </tr>

       <tr>
        <td><input type="submit" value="Cadastrar" class="btn btn-info " /></td>
      </tr>
            </table>
    </form>

</div>
</div>

</html>
