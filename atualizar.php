<?php

require_once('conexao.php');

$id = $_POST['codigo'];
$descricao = $_POST['txt_produto'];
$estoque = $_POST['number_estoque'];
$marca = $_POST['txt_marca'];
$preco = $_POST['number_preco'];

$sql_atualizar=mysqli_query( $ligar, "UPDATE produtos SET descricao='$descricao', 
estoque='$estoque', marca='$marca', preco='$preco' WHERE id='$id' " );


if($sql_atualizar == true){

    echo " <script>

    alert('Produto Atualizado com Sucesso!');
    window.location.href='listagem.php';
    
    
    
    </script>";


}

 else {

    echo " <script>

    alert('Falha ao Atualizar!');
    window.location.href='editar.php';
    
    
    
    </script>";

}

?>