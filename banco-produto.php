<?php
require_once 'conexao.php';

function listaProdutos($conexao){
  $produtos = array();
  $resultado = mysqli_query($conexao, "select * from produtos");

  while($produto = mysqli_fetch_assoc($resultado)){

    array_push($produtos, $produto);

  }
return $produtos;
}

function insereProduto($nome, $preco){
  $conexao = mysqli_connect('localhost','root','','loja');
  $query = "INSERT INTO produtos (nome, preco) values('{$nome}',{$preco})";
 return mysqli_query($conexao, $query);


}

function removeProduto($conexao, $id){

$query = "DELETE from produtos where id = {$id}";
return mysqli_query($conexao, $query);

















}
