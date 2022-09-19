<?php

require_once('conexao.php');

$descricao = $_POST['txt_produto'];
$estoque = $_POST['number_estoque'];
$marca = $_POST['txt_marca'];
$preco = $_POST['number_preco'];

$sql_cadastro=mysqli_query( $ligar, "INSERT INTO produtos (descricao,estoque,marca,preco ) values ('$descricao','$estoque','$marca','$preco')" );

if($sql_cadastro==true){

    echo "<script>
    alert('Cadastro realizado com sucesso!');
    window.location.href='index.html';
    
    
    
    </script>";


}
 else{

    echo "<script>
    alert('Falha no cadastro!');
    window.location.href='cadastroproduto.html';
    
    
    
    </script>";

}

?>